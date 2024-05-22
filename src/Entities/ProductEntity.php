<?php
class ProductEntity
{
    private string $name;

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

    public function getName(): string
    {
        return $this->name;
    }
    public function getWidth(): string
    {
        return $this->width;
    }
    public function getHeight(): string
    {
        return $this->height;
    }
    public function getDepth(): string
    {
        return $this->depth;
    }
    public function getRelated(): string
    {
        return $this->related;
    }

    public function getId(): int
    {
        return $this->id;
    }
}