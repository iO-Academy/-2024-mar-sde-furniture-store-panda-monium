<?php

class ProductsEntity

{
    private float $price;
    private int $stockNumber;
    private string $color;

    public function getPrice(): float
    {
        return $this->price;
    }
    public function getStockNumber() : int
    {
        return $this->stockNumber;
    }
    public function getColor(): string
    {
        return $this->color;
    }
}