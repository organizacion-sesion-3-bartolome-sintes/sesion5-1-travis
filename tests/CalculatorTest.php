<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->multiply(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivision()
    {
        $result = $this->calculator->division(10, 2);
        $this->assertEquals(5, $result);
    }

    public function testEsPar1()
    {
        $result = $this->calculator->esPar(5);
        $this->assertFalse($result);
    }
 
    public function testEsPar2()
    {
        $result = $this->calculator->esPar(-5);
        $this->assertFalse($result);
    }
 
    public function testEsPar3()
    {
        $result = $this->calculator->esPar(4.1);
        $this->assertFalse($result);
    }
 
    public function testEsPar4()
    {
        $result = $this->calculator->esPar(4.9);
        $this->assertFalse($result);
    }
 
    public function testEsPar5()
    {
        $result = $this->calculator->esPar(-3.9);
        $this->assertFalse($result);
    }
 
    public function testEsPar6()
    {
        $result = $this->calculator->esPar(-3.1);
        $this->assertFalse($result);
    }
 
    public function testEsPar7()
    {
        $result = $this->calculator->esPar("aaa");
        $this->assertFalse($result);
    }
 
    public function testEsPar8()
    {
        $result = $this->calculator->esPar(0x1D);
        $this->assertFalse($result);
    }
 
    public function testEsPar9()
    {
        $result = $this->calculator->esPar(0b1111);
        $this->assertFalse($result);
    }
 
    public function testEsPar10()
    {
        $result = $this->calculator->esPar(065);
        $this->assertFalse($result);
    }
    
    public function testEsPar11()
    {
        $result = $this->calculator->esPar(2);
        $this->assertTrue($result);
    }
    
    public function testEsPar12()
    {
        $result = $this->calculator->esPar(0);
        $this->assertTrue($result);
    }
    
    public function testEsPar13()
    {
        $result = $this->calculator->esPar(-2);
        $this->assertTrue($result);
    }
    
    public function testEsPar14()
    {
        $result = $this->calculator->esPar(4.0);
        $this->assertTrue($result);
    }
    
    public function testEsPar15()
    {
        $result = $this->calculator->esPar(0x1E);
        $this->assertTrue($result);
    }
    
    public function testEsPar16()
    {
        $result = $this->calculator->esPar(0b1110);
        $this->assertTrue($result);
    }
    
    public function testEsPar17()
    {
        $result = $this->calculator->esPar(066);
        $this->assertTrue($result);
    }
    
    public function testEsPar18()
    {
        $result = $this->calculator->esPar();
        $this->assertFalse($result);
    }
 
}
