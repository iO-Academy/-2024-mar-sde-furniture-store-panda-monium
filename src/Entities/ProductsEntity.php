<?php
class ProductsEntity
{
    private string $name;
    private float $price;
    private int $stock;
    private string $color;
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getStock() : int
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
}