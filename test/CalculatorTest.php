<?php

//require "vendor/autoload.php";

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
        // Create a stub for the SomeClass class.
        $stub = $this->getMock('Calculator');

        // Configure the stub.
        $stub->expects($this->any())
             ->method('subtract')
             ->will($this->returnValue(5));

        // $stub->doSomething('foo') returns 'foo'
        $this->assertEquals(5, $stub->subtract(7,2));
    }
}

?>
