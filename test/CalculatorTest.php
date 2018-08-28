<?php

require "vendor/autoload.php";

class CalculatorTest extends PHPUnit\Framework\TestCase\{
  public function testAddNumbers(){
    $calc=new Calculator;
    $this->assertEquals(4,$calc->add(2,2));
  }
}


?>
