<?php

class CategoryEntity
{
    private string $name;
    private int $stockTotal;
    private int $id;

    public function getName()
    {
        return $this->name;
    }

    public function getStockTotal()
    {
        return $this->stockTotal;
    }
}