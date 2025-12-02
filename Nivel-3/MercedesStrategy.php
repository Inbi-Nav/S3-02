<?php
require_once 'carCouponGenerator.php';

class MercedesStrategy implements carCouponGenerator {
   private $discount = 0;

    function addSeasonDiscount() {
        return $this->discount += 4;
    }   

    
    function addStockDiscount() {
        return $this->discount+= 10;
    }

    function calculateDiscount() 
    {
        return $this->discount;
    }
}
?>