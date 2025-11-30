<?php
require 'BMWCouponGenerator.php';
require 'MercedesCouponGenerator.php';

$isHighSeason = false;
$bigStock = true;

$bmw = new BMWCouponGenerator();

echo $bmw->generateCoupon($isHighSeason, $bigStock);

$mercedes = new MercedesCouponGenerator();

echo $mercedes->generateCoupon($isHighSeason, $bigStock);
?>