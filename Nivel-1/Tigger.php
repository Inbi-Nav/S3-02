<?php

class Tigger {

    private static $instance = null;
    private static $counter = 0;

    public static function getInstanca() {
        if (self::$instance === null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }
    public function roar() {
            self::$counter++;
            echo "Grrr!" . PHP_EOL;
    }
    
    public static function getCounter() {
        return self::$counter;
    }
}

$t1 = Tigger::getInstanca();
$t2 = Tigger::getInstanca();
$t1->roar();
$t2-> roar();

?>