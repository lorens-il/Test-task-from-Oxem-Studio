<?php 

    require_once "index.php";

    use classes\Farm;
    use classes\Cow;
    use classes\Chicken;    

    $farm = new Farm();

    $farm->addAnimals(20, Cow::getAnimalType());
    $farm->addAnimals(1, Cow::getAnimalType());
    $farm->addAnimals(10, Chicken::getAnimalType());
    $farm->addAnimals(4, Chicken::getAnimalType());
    // print_r($farm->animals);
    // $farm->addAnimals(10, "cat");
    // $farm->addAnimals(15, "cat");
    print_r($farm->animals);
?>
