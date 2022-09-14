<?php 

    require_once 'classes\Farm.php';
    require_once 'classes\Cow.php';
    use classes\Farm;
    use classes\Cow;
    
    $farm = new Farm();
    $farm->addAnimals(20, Cow::getAnimalType());
    $farm->addAnimals(1, Cow::getAnimalType());
    // print_r($farm->animals);
    // $farm->addAnimals(10, "cat");
    // $farm->addAnimals(15, "cat");
    print_r($farm->animals);
?>
