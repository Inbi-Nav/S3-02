<?php

require_once 'Soap.php';
require_once 'Rinse.php';
require_once 'Dry.php';

class DishWasher {
    private $soap;  
    private $rinse;
    private $dry;

    public function __construct($soap, $rinse, $dry)
    {
        $this->soap = $soap;
        $this->rinse = $rinse;
        $this->dry = $dry;
    }

    public function start() {
        $this->soap->applySoap();
        $this->rinse->rinseDishes();
        $this->dry->dryDishes();
    }

}
?>