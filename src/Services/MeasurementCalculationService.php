<?php

class MeasurementCalculationService
{
    public const MM = 'mm';
    public const CM = 'cm';
    public const IN = 'in';
    public const FT = 'ft';

    public const UNITS = [
        MeasurementCalculationService::MM => 1,
        MeasurementCalculationService::CM => 10,
        MeasurementCalculationService::IN => 25.4,
        MeasurementCalculationService::FT => 304.8,
    ];

    public static function convertUnit(int $value, string $unitOfMeasurement): string
    {
        if ($value < 0) {
            throw new Exception('Dimension must be greater than 0');
        }

     return number_format($value / MeasurementCalculationService::UNITS[$unitOfMeasurement], 2) . $unitOfMeasurement;
    }
}