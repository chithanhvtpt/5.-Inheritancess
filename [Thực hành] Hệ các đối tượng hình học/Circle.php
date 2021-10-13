<?php
include_once 'Shape.php';

class Circle extends Shape
{
    public $radius;

    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * sqrt($this->radius * 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
}
