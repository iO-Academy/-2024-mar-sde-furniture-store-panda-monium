<?php

class ProductsDisplayService
{
    public static function displayProduct(ProductEntity $productEntity): string
    {
        return '<div class="bg-slate-100 p-5">
                    <div class="flex justify-between items-center">
                        <h3 class="text-2xl">Price: £' . number_format($productEntity->getprice(), 2)  . '</h3>
                        <span class="bg-teal-500 text-2xl px-2 py-1 rounded">' . $productEntity->getStock() . '</span>
                    </div>
                    <p>Color: ' . $productEntity->getColor() . '</p>
                    <a href="product.php?id=' . $productEntity->getId() . '" class="inline-block bg-blue-600 px-3 py-2 rounded text-white mt-1">More >></a>
                </div>';
    }

    public static function displayIndividualProduct(ProductEntity $product, string $units): string
    {
        if (isset($_GET["units"])) {
            return '<section class="container mx-auto md:w-2/3 border p-8 mt-5">
                    <div class="flex justify-between items-start" >
                        <h1 class="text-5xl" >' . $product->getColor() . ' - £' . number_format($product->getPrice(), 2) . '</h1 >
                        <span class="bg-teal-500 px-2 rounded" > Stock: ' . $product->getStock() . '</span >
                    </div >
                    <h2 class="text-3xl mt-3" > Dimensions</h2 >
                    <p class="mt-2" > Width: ' . $product->calculatedWidth . $units . '</p >
                    <p class="mt-3" > Height: ' .  $product->calculatedHeight . $units .'</p>
                    <p class="mt-3" > Depth: ' . $product->calculatedDepth .  $units .'</p>
                </section>';
        } else {
            return '<section class="container mx-auto md:w-2/3 border p-8 mt-5">
                    <div class="flex justify-between items-start" >
                        <h1 class="text-5xl" >' . $product->getColor() . ' - £' . number_format($product->getPrice(), 2) . '</h1 >
                        <span class="bg-teal-500 px-2 rounded" > Stock: ' . $product->getStock() . '</span >
                    </div >
                    <h2 class="text-3xl mt-3" > Dimensions</h2 >
                    <p class="mt-2" > Width: ' . $product->getWidth() . 'mm</p >
                    <p class="mt-3" > Height: ' . $product->getHeight() . 'mm</p>
                    <p class="mt-3" > Depth: ' . $product->getDepth() . 'mm</p>
                </section>';
        }
    }

    public static function displaySimilarProduct(ProductEntity $similarProduct): string
    {
        return '<section class="container mx-auto md:w-2/3 border p-8 mt-10">
                    <h1 class="text-3xl border-b pb-3 mb-3">Similar Product</h1>
                    <div class="flex justify-between items-start">
                        <p class="text-2xl">£' . number_format($similarProduct->getPrice(), 2) . '</p>
                        <span class="bg-teal-500 px-2 rounded">Stock: ' . $similarProduct->getStock() . '</span>
                    </div>
                    <div class="flex justify-between items-start">
                        <p>Color: ' . $similarProduct->getColor() . '</p>
                        <a href="product.php?id=' . $similarProduct->getId() . '" class="inline-block bg-blue-600 px-3 py-2 rounded text-white mt-1">More >></a>
                    </div>
                </section>';
    }
}

