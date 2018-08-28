<?php

//require "vendor/autoload.php";
require 'coveralls';
Coveralls.wear;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
  public function testAddNumbers(){
    $calc=new Calculator;
    $this->assertEquals(4,$calc->add(2,2));
  }
}


?>
