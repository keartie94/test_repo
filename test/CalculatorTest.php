<?php

//require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
  public function testAddNumbers(){
    $calc=new Calculator;
    $this->assertEquals(4,$calc->add(2,2));
  }

  public function(){
    $calc=new Calculator;
    $this=assertEquals(3,$calc->subtract(5,2));
  }
}


?>
