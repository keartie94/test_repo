<?php

//require "vendor/autoload.php";
require 'Calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
  public function testAddNumbers(){
    $calc=new Calculator;
    $this->assertEquals(4,$calc->add(2,2));
  }

  public function testSubtractNumbers(){
    $calc=new Calculator;
    $this->assertEquals(3,$calc->subtract(5,2));
  }
  public function testDivide(){
    $calc=new Calculator;
    $this->assertEquals(3,$calc->divide(12,4));
  }

  public function testReturnArgumentStub()
    {

        // Configure the stub.
        $stub=$this->getMockBuilder('Calculator')
                             ->disableOriginalConstructor()
                             ->disableOriginalClone()
                             ->disableArgumentCloning()
                             ->disallowMockingUnknownTypes()
                             ->getMock();

       $stub->method('subtract')
            ->willReturn(5);

        // $stub->doSomething('foo') returns 'foo'
        $this->assertEquals(5, $stub->subtract(7,2));
    }
}

?>
