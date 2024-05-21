<?php

class CategoryNameService
{
    public static function displayCategoryName(CategoryEntity $categoryEntity): string
    {
        return '<span>' . CategoryEntity::getName() . '</span>';
    }
}