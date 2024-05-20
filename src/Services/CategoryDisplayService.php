<?php

require_once 'src/Entities/CategoryEntity.php';

$categoryEntity = new CategoryEntity();

class CategoryDisplayService
{

    public static function displayCategory($categoryEntity): string
        {
            return '<div class="flex justify-between items-center bg-slate-100 p-5">
                        <h3 class="text-2xl">' . $categoryEntity->getName() . '</h3>
                        <span class="bg-teal-500 text-2xl px-2 py-1 rounded">' . $categoryEntity->getStocktotal() . '</span>
                    </div>';
        }
}