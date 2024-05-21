<?php
class CategoryEntity
{
    private string $name;
    private int $stockTotal;
    private int $id;

    public function getName(): string
    {
        return $this->name;
    }
    public function getStockTotal(): int
    {
        return $this->stockTotal;
    }

}