<?php

class MeasurementCalculationService
{
    public const MM = 'mm';
    public const CM = 'cm';
    public const IN = 'in';
    public const FT = 'ft';

    public static function calculateDimension(int $dimension, string $unitOfMeasurement): string
    {
        if ($dimension < 0) {
            throw new Exception('Dimension must be greater than 0');
        }

        $unitConvert = 0;

     if ($unitOfMeasurement === 'cm') {
         $unitConvert = 10;
     } else if ($unitOfMeasurement === 'in') {
         $unitConvert = 25.4;
     } else if ($unitOfMeasurement === 'ft'){
         $unitConvert = 304.8;
     } else {
         $unitConvert = 1;
     }

     $dimension = number_format($dimension / $unitConvert, 2);
     return $dimension;
    }
}