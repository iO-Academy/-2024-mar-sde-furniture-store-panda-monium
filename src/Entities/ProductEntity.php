<?php

class ProductEntity
{
    private float $price;

    private int $stock;

    private string $color;

    private int $width;
    
    private int $height;
    
    private int $depth;
    
    private int $related;
    
    private int $id;

    private int $calculatedWidth;

    private int $calculatedHeight;

    private int $calculatedDepth;

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function getRelated(): int
    {
        return $this->related;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function calculateCM()
    {
        $this->calculatedWidth = $this->width * 10;
        $this->calculatedHeight = $this->height * 10;
        $this->calculatedDepth = $this->depth *10;
    }
}