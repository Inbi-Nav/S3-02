<?php

require_once 'Soap.php';
require_once 'Rinse.php';
require_once 'Dry.php';

require_once 'DishWasher.php';

$soap = new Soap();
$rinse = new Rinse();
$dry = new Dry();

$washDishes = new DishWasher($soap, $rinse, $dry);

$washDishes->start();


?>