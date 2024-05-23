<?php

class IndividualProductEntity extends ProductEntity
{
    private int $width;

    private int $height;

    private int $depth;

    private int $related;

    private int $category_id;

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

    public function getCategory(): int
    {
        return $this->category_id;
    }

}