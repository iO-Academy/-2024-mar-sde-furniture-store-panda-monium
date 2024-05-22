<?php

require_once '../src/Services/ProductsDisplayService.php';
require_once '../src/Entities/ProductEntity.php';

use PHPUnit\Framework\TestCase;

class TestProductsDisplayService extends TestCase
{

    public function testDisplayProduct_Success() {
        $productsMock = $this->createMock(ProductEntity::class);
        $productsMock->method('getPrice')->willReturn(430.69);
        $productsMock->method('getColor')->willReturn('Red');
        $productsMock->method('getStock')->willReturn(69);
        $productsMock->method('getId')->willReturn(6);

        $result = ProductsDisplayService::displayProduct($productsMock);
        $expectedResult = '
    <div class="bg-slate-100 p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-2xl">Price: £430.69</h3>
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">69</span>
        </div>
        <p>Color: Red</p>
        <a href="product.php?id=6" class="inline-block bg-blue-600 px-3 py-2 rounded text-white mt-1">More >></a>
    </div>
  ';
        $this->assertSame($result, $expectedResult);
    }

    public function testDisplayProduct_Malformed()
    {
        $this->expectException(TypeError::class);
        ProductsDisplayService::displayProduct('dave');
    }

    public function testDisplaySimilarProduct()
    {
        $similarProductMock = $this->createMock(ProductEntity::class);
        $similarProductMock->method('getPrice')->willReturn(430.69);
        $similarProductMock->method('getColor')->willReturn('Red');
        $similarProductMock->method('getStock')->willReturn(69);
        $similarProductMock->method('getId')->willReturn(6);

        $result = ProductsDisplayService::displaySimilarProduct($similarProductMock);
        $expectedResult =
            '<section class="container mx-auto md:w-2/3 border p-8 mt-10">
            <h1 class="text-3xl border-b pb-3 mb-3">Similar Product</h1>
            <div class="flex justify-between items-start">
                <p class="text-2xl">£430.69</p>
                <span class="bg-teal-500 px-2 rounded">Stock: 69</span>
            </div>
            <div class="flex justify-between items-start">
                <p>Color: Red</p>
                <a href="product.php?id=6" class="inline-block bg-blue-600 px-3 py-2 rounded text-white mt-1">More >></a>
            </div>
            </section>';
        $this->assertSame($result, $expectedResult);
    }

    public function testDisplaySimilarProduct_Malformed()
    {
        $this->expectException(TypeError::class);
        ProductsDisplayService::displaySimilarProduct('dave');
    }
}