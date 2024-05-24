<?php

class ProductEntity
{
    protected float $price;

    protected int $stock;

    protected string $color;
    
    protected int $id;


    public function getPrice(): string
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
}