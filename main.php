<?php 

    require_once 'classes\Farm.php';
    use classes\Farm;
    
    $farm = new Farm();
    // $obj->addAnimals(20, "cows");
    // $obj->addAnimals(10, "chickens");
    // print_r($obj->animals);
    $farm->addAnimals(10, "cat");
    $farm->addAnimals(15, "cat");
    print_r($farm->animals);
?>
