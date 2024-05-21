<?php

require_once '../src/Services/ProductsDisplayService.phpDisplayService.php';
require_once '../src/Entities/ProductsEntity.php';

use PHPUnit\Framework\TestCase;

class TestProductDisplayService extends TestCase
{
    public function testDisplayProducts() {
//        $categoryMock->method('getName')->willReturn('test');
//        $categoryMock->method('getStockTota')->willReturn('100');
        $productsMock = $this->createMock(ProductsEntity::class);
        $productsMock->method('getPrice')->willReturn('');

        $result = ProductDisplayService::displayProducts($productsMock);
        $expectedResult = '<div class="flex justify-between items-center bg-slate-100 p-5">
                        <h3 class="text-2xl">test</h3>
                        <span class="bg-teal-500 text-2xl px-2 py-1 rounded">100</span>
                    </div>';
        $this->assertSame($result, $expectedResult);
    }

}