<?php

interface carCouponGenerator {
    public function calculateDiscount();
    public function addSeasonDiscount();
    public function addStockDiscount() ;
}
?>
