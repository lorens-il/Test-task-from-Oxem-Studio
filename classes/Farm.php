<?php 
    namespace classes;

    class Farm {
        
        private $animals = [];
        private $products = [];

        // Возвращает $animals
        public function getAnimals() {
            return $this->animals;
        }

        // Вывод количества каждого типа животных
        public function printAnimalsQuantityEachType() {
            foreach($this->animals as $k => $v) {
                echo "$k: {$v["quantity"]}\n";
            }
        }

        // Генерируют id для каждого животного и возвращает массив с id
        private function getGenerateIds($idsArray, $quantity, $className) {
            for ($i=0; $i<$quantity; $i++) { 
                array_push($idsArray, uniqid($className));
            }
            return $idsArray;
        }

        // Добавление животных
        public function addAnimals($quantity, $className) {
            if(!array_key_exists($className, $this->animals)) {
                $this->animals[$className] = [];
            }
            if(!array_key_exists("ids", $this->animals[$className])) {
                $this->animals[$className]["ids"] = [];
            }
            if(!array_key_exists("quantity", $this->animals[$className])) {
                $this->animals[$className]["quantity"] = 0;
            }

            $this->animals[$className]["quantity"] += $quantity;
            $this->animals[$className]["ids"] = $this->getGenerateIds($this->animals[$className]["ids"], $quantity, $className);
            
        }
        
        // Подсчёт количества определённой продукции за 7 дней
        public function collectedGoods($classAnimal, $minProductsDay, $maxProductsDay) {
            $this->products[$classAnimal::getProductType()] = 0;
            $quantityProduct = $this->animals[$classAnimal::getAnimalType()]["quantity"];
            for ($i=0; $i<7; $i++) {
                for ($j=0; $j<$quantityProduct; $j++) {
                    $this->products[$classAnimal::getProductType()] += $classAnimal->getProductsDay($minProductsDay, $maxProductsDay);
                }
            }
            echo "За 7 дней собрано {$classAnimal::getProductType()}: {$this->products[$classAnimal::getProductType()]}\n";
        }

    }
