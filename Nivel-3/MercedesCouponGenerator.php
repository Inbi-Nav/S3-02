<?php
require 'MercedesStrategy.php';

class MercedesCouponGenerator {

    private $strategy;

    public function __construct() {
        $this->strategy = new MercedesStrategy();
    }

    public function generateCoupon($isHighSeason, $bigStock) {

        if(!$isHighSeason) {
            $this->strategy->addSeasonDiscount();
        }

        if($bigStock) {
            $this->strategy->addStockDiscount();
        }

        $discount = $this->strategy->calculateDiscount();

        return "Get {$discount}% off the price of your new Mercedes.!";
    }
}
?>
