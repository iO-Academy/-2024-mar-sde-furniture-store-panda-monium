<?php
class ProductsDisplayService
{
    public static function displayProduct(ProductEntity $productEntity): string
    {
        return '
    <div class="bg-slate-100 p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-2xl">Price: £' . number_format($productEntity->getprice(), 2)  . '</h3>
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">' . $productEntity->getStock() . '</span>
        </div>
        <p>Color: ' . $productEntity->getColor() . '</p>
    </div>
  ';
    }
}

