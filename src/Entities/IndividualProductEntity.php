<?php

require_once 'src/Services/MeasurementCalculationService.php';

class IndividualProductEntity extends ProductEntity
{
    private int $width;

    private int $height;

    private int $depth;

    private int $related;

    private int $category_id;

    public function getWidth(string $unitOfMeasurement): string
    {
        $convertedWidth = MeasurementCalculationService::convertUnit($this->width, $unitOfMeasurement);
        return $convertedWidth;
    }

    public function getHeight(string $unitOfMeasurement): string
    {
        $convertedHeight = MeasurementCalculationService::convertUnit($this->height, $unitOfMeasurement);
        return $convertedHeight;
    }

    public function getDepth(string $unitOfMeasurement): string
    {
        $convertedDepth = MeasurementCalculationService::convertUnit($this->depth, $unitOfMeasurement);
        return $convertedDepth;
    }

    public function getRelated(): int
    {
        return $this->related;
    }

    public function getCategory(): int
    {
        return $this->category_id;
    }

}