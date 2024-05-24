<?php

require_once '../src/Services/MeasurementCalculationService.php';

use PHPUnit\Framework\TestCase;

class TestMeasurementCalculationService extends TestCase
{
    public function testCalculateDimension_SuccessMM()
    {
        $result = MeasurementCalculationService::convertUnit(10, 'mm');
        $expectedResult = '10.00';
        $this->assertSame($result, $expectedResult);
    }

    public function testCalculateDimension_SuccessCM()
    {
        $result = MeasurementCalculationService::convertUnit(10, 'cm');
        $expectedResult = '1.00';
        $this->assertSame($result, $expectedResult);
    }

    public function testCalculateDimension_SuccessIN()
    {
        $result = MeasurementCalculationService::convertUnit(10, 'in');
        $expectedResult = '0.39';
        $this->assertSame($result, $expectedResult);
    }

    public function testCalculateDimension_SuccessFT()
    {
        $result = MeasurementCalculationService::convertUnit(10, 'ft');
        $expectedResult = '0.03';
        $this->assertSame($result, $expectedResult);
    }

    public function testCalculateDimension_MalformedDimension()
    {
        $this->expectException(TypeError::class);
        MeasurementCalculationService::convertUnit('dave', 'mm');
    }

    public function testCalculateDimension_MalformedUnit()
    {
        $this->expectException(TypeError::class);
        MeasurementCalculationService::convertUnit(10, []);
    }

    public function testCalculateDimension_DefaultMM()
    {
        $result = MeasurementCalculationService::convertUnit(10, 'dave');
        $expectedResult = '10.00';
        $this->assertSame($result, $expectedResult);
    }
    public function testCalculateDimension_MalformedData()
    {
        $result = MeasurementCalculationService::convertUnit('10', 'dave');
        $expectedResult = '10.00';
        $this->assertSame($result, $expectedResult);
    }

    public function testCalculateDimension_Failure()
    {
        $this->expectException(Exception::class);
        MeasurementCalculationService::convertUnit(-10, 'mm');
    }
}