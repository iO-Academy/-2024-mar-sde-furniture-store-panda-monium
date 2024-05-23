<?php

class MeasurementDisplayService
{
    public static function displayMeasurementBtn(ProductEntity $product, string $unit)
    {

     $width = $product->getWidth();
     $height = $product->getHeight();
     $depth = $product->getDepth();
     $unitConvert = 0;

     if ($unit === 'cm') {
         $unitConvert = 10;
     } else if ($unit === 'in') {
         $unitConvert = 25.4;
     } else if ($unit === 'ft'){
         $unitConvert = 304.8;
     } else {
         $unitConvert = 1;
     }
        $width = number_format($width / $unitConvert, 2);
        $height = number_format($height / $unitConvert, 2);
        $depth = number_format($depth / $unitConvert, 2);

        $product->setCalculatedWidth($width);
        $product->setCalculatedHeight($height);
        $product->setCalculatedDepth($depth);

    }
}