<?php

class Dis {
    private $clean;
    private $wash;
    private $dry;

    public function __construct($clean, $wash, $dry)
    {
        $this->clean = $clean;
        $this->wash = $wash;
        $this->dry = $dry;
    }

    public function start() {
        $this->clean->cleaningDishes();
        $this->wash->washingDishes();
        $this->dry->dryingDishes();
    }

}
?>