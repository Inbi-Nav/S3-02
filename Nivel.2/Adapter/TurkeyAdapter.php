<?php
require_once 'DuckInterface.php';
require_once 'poultry.php';

class TurkeyAdapter implements DuckInterface {

    private $turkey;

    public function __construct(Turkey $turkey) {
        $this->turkey = $turkey;
    }

    public function quack() {
        $this->turkey->gobble();
    }

    public function fly() {
        for ($i = 1; $i <= 5;$i++) {
            $this->turkey->fly();
        }
    }
}
