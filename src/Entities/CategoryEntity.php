<?php

class CategoryEntity
{
    private string $name;
    private int $stockTotal;
    private int $id;


    public function setName($name)
    {
         $this->name = $name;

    }

    public function getName()
    {
        return $this->name;
    }
    public function setStockTotal($stockTotal)
    {
        $this->stockTotal = $stockTotal;

    }

    public function getStockTotal()
    {
        return $this->stockTotal;
    }
}