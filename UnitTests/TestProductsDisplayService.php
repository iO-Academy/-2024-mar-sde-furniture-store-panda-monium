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

        $result = ProductsDisplayService::displayProduct($productsMock);
        $expectedResult = '
    <div class="bg-slate-100 p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-2xl">Price: £430.69</h3>
            <span class="bg-teal-500 text-2xl px-2 py-1 rounded">69</span>
        </div>
        <p>Color: Red</p>
    </div>
  ';
        $this->assertSame($result, $expectedResult);
    }

    public function testDisplayProduct_Malformed()
    {
        $this->expectException(TypeError::class);
        ProductsDisplayService::displayProduct('dave');
    }
}