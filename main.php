<?php 

    require_once "index.php";

    use classes\Farm;
    use classes\Cow;
    use classes\Chicken;    

    $farm = new Farm();
    $chicken = new Chicken();
    $cow = new Cow();

    //Система должна добавить животных в хлев (10 коров и 20 кур).
    $farm->addAnimals(20, Cow::getAnimalType());
    $farm->addAnimals(10, Chicken::getAnimalType());

    echo "\nВывести на экран информацию о количестве каждого типа животных на ферме.\n";
    echo $farm->printAnimalsQuantityEachType();

    echo "\nВывести на экран общее кол-во собранных за неделю шт. яиц и литров молока.\n";
    $farm->collectedGoods($chicken, 0, 1);
    $farm->collectedGoods($cow, 8, 12);

    // Добавить на ферму ещё 5 кур и 1 корову (съездили на рынок, купили животных).
    $farm->addAnimals(1, Cow::getAnimalType());
    $farm->addAnimals(5, Chicken::getAnimalType());

    echo "\nСнова вывести информацию о количестве каждого типа животных на ферме.\n";
    echo $farm->printAnimalsQuantityEachType();

    echo "\nСнова 7 раз (неделю) производим сбор продукции и выводим результат на экран.\n";
    $farm->collectedGoods($chicken, 0, 1);
    $farm->collectedGoods($cow, 8, 12);
    
?>
