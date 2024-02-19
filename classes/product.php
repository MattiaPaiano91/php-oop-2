<?php

class Product
{
    public $name;
    public $price;
    public $size;
    public $material;
    public $avaiable;
    public $category;

        public function __construct($name, $price, $size, $material, $avaiable,$category){
            $this->name = $name;
            $this->price = $price;
            $this->size = $size;
            $this->material = $material;
            $this->avaiable = $avaiable;
            $this->category = $category;

        }

}