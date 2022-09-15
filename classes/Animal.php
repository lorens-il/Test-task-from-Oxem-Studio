<?php 
    namespace classes;

    class Animal {
        private $quantity;

        public function getProductsDay($min, $max) {
            $this->quantity = mt_rand($min, $max);
            return $this->quantity;
        }

    }

?>