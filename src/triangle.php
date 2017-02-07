<?php

  class Triangle
  {
    public $side1;
    public $side2;
    public $side3;

    function __construct($side1,$side2,$side3)
    {
      $this->side1 = $side1;
      $this->side2 = $side2;
      $this->side3 = $side3;
    }

    function calculate() {
      if ($this->side1 == $this->side2 && $this->side2 == $this->side3) {
        return 'equilateral';
      }
      else if ($this->side1 == $this->side2 || $this->side2 == $this->side3 || $this->side1 == $this->side3) {
        return 'isosceles';
      }
      else {
        return 'scalene';
      }
    }
  }





 ?>
