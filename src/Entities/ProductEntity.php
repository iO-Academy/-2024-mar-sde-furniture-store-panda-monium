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
}