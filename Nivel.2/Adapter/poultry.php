<?php
require_once 'DuckInterface.php';

class Duck implements DuckInterface {

    public function quack() {
        echo "Quack\n";
    }

    public function fly() {
        echo "I'm flying\n";
    }
}

class Turkey {

    public function gobble() {
        echo "Gobble gobble\n";
    }

    public function fly() {
        echo "I'm flying a short distance\n";
    }
}
