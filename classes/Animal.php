<?php 
    namespace classes;

    class Animal {
        private $quantity;

        public function getProductsDay($min, $max) {
            $this->quantity = random_int($min, $max);
            return $this->quantity;
        }

    }

?>