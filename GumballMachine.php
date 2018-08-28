<?php
  class GumballMachine{

      //Get amount of gumballs in machine
      public function getGumballs(){
        return $this->gumball;
      }
      //Set amount of gumballs in machine
      public function setGumballs($amount){
        $this->gumball = $amount;
      }

      public function turnWheel(){
        $this->setGumballs($this->getGumballs()-1);
      }

      
  }
