<?php 

class Food {
    public $fruit = "apple";
    private $drinks = "mango juice";
    protected $desserts = "salad";

    public function __construct(){
        echo $this->desserts;
    }

    public function getFruit(){
        echo $this->fruit;
    }

    function getDrinks(){
        echo $this->drinks;
    }
}

$food = new Food;

$food->getFruit();
