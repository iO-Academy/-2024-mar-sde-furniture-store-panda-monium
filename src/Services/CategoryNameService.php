<?php

class CategoryNameService
{
    public static function displayCategoryName(ProductsEntity $productEntity): string
    {
        return
        ProductEntity::getName();
    }
}