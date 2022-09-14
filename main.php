<?php 

    // $animals = [
    //         "cows" =>["ids"=>[], "quantity"=>0],
    //         "chickens"=>["ids"=>[], "quantity"=>0]
    // ];

    class Farm {
        
        public $animals = [];
        public $product;
        /*
                м сбора
                м подсчёта
               м добавления ****
                статик м присв id каждому животному
        */
    

        // добавление животных
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

            $newQuantity = $this->animals[$className]["quantity"] += $quantity;
            $this->animals[$className]["ids"] = $this->generateIds($this->animals[$className]["ids"], $newQuantity, $className);
            
        }

        private function generateIds($idsArray, $quantity, $className) {
            for ($i=0; $i<$quantity; $i++) { 
                array_push($idsArray, uniqid($className));
            }
            return $idsArray;
        }

    }

    
    
    $obj = new Farm();
    // $obj->addAnimals(20, "cows");
    // $obj->addAnimals(10, "chickens");
    // print_r($obj->animals);
    $obj->addAnimals(10, "cat");
    $obj->addAnimals(15, "cat");
    print_r($obj->animals);
