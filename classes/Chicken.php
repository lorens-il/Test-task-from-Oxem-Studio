<?php 
    namespace classes;
    require_once 'Animal.php';
    
    class Chicken extends Animal {
        private static $animalType = "chickens";
        private static $productType = "eggs";


        public static function getAnimalType() {
            return self::$animalType;
        }

        public static function getProductType() {
            return self::$productType;
        }    
    }

?>