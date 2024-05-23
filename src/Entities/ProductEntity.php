<?php

class ProductEntity
{
    protected float $price;

    protected int $stock;

    protected string $color;
    
    protected int $id;

    public string $calculatedWidth;

    public string $calculatedHeight;

    public string $calculatedDepth;

    public function getPrice(): float
    {
        return number_format($this->price, 2);
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setCalculatedWidth($width)
    {
        $this->calculatedWidth = $width;
    }

    public function setCalculatedHeight($height)
    {
        $this->calculatedHeight = $height;
    }

    public function setCalculatedDepth($depth)
    {
        $this->calculatedDepth = $depth;
    }
}