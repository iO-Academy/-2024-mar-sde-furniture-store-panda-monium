<?php

class ProductEntity

{
    private string $price;
    private int $stockNumber;
    private int $color;

    public function getprice()
    {
        return $this->price;
    }
    public function getstockNumber()
    {
        return $this->stockNumber;
    }
    public function getColor()
    {
        return $this->color;
    }
}