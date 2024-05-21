<?php
class CategoryDisplayService
{
    public static function displayCategory(CategoryEntity $categoryEntity): string
        {
            return '<div class="bg-slate-100 p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-2xl">' . $categoryEntity->getName() . '</h3>
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">'. $categoryEntity->getStockTotal() . '</span>
        </div>
        <a href="products.html" class="inline-block bg-blue-600 px-3 py-2 rounded text-white">More >></a>
    </div>';
        }
}