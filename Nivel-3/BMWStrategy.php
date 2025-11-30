<?php
require 'carCouponGenerator.php';

class BMWStrategy implements carCouponGenerator {
   private $discount = 0;

    function addSeasonDiscount() {
        return $this->discount += 5;
    }   

    
    function addStockDiscount() {
        return $this->discount+= 7;
    }

    function calculateDiscount() {
        return $this->discount;
    }


}
?>