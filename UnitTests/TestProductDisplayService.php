<?php

require_once '../src/Services/ProductsDisplayService.php';
require_once '../src/Entities/ProductsEntity.php';

use PHPUnit\Framework\TestCase;
class TestProductDisplayService extends TestCase
{
    public function testDisplayProducts_Success() {
        $productsMock = $this->createMock(ProductsEntity::class);
        $productsMock->method('getPrice')->willReturn(430.69);
        $productsMock->method('getColor')->willReturn('Red');
        $productsMock->method('getStock')->willReturn(69);

        $result = ProductsDisplayService::displayProducts($productsMock);
        $expectedResult = '
    <div class="bg-slate-100 p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-2xl">Price: £430.69</h3>
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">69</span>
        </div>
        <p>Color: Red</p>
        <a href="product.php" class="inline-block bg-blue-600 px-3 py-2 rounded text-white mt-1">More >></a>
    </div>
  ';
        $this->assertSame($result, $expectedResult);
    }
    public function testDisplayProducts_Malformed()
    {
        $this->expectException(TypeError::class);
        ProductsDisplayService::displayProducts('dave');
    }
}