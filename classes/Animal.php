<?php 
    namespace classes;

    class Animal {
        public $quantity;

        public function getProductsDay($min, $max) {
            $this->quantity = mt_rand($min, $max);
        }

    }

?>