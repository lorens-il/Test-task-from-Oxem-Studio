<?php 
    namespace classes;
    require_once 'Animal.php';
    
    class Cow extends Animal {
        private static $animalType = "cows";
        private static $productType = "milk";


        public static function getAnimalType() {
            return self::$animalType;
        }

        public static function getProductType() {
            return self::$productType;
        }    
    }

?>