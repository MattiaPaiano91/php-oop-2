<?php
require_once __DIR__ . '/product.php';
class Toy extends product{
    public $color;


    public function __construct($imgUrl, $name, $price, $size, $material, $avaiable, $category, $color){

            parent::__construct($imgUrl, $name, $price, $size, $material, $avaiable, $category, $color);
                $this->color = $color;
           
    }
    
}