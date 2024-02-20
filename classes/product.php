<?php
require_once __DIR__ . '/../traits/HasMaterial.php';
class Product
{
    use HasMaterial;
    public $imgUrl;
    public $name;
    public $price;
    public $size;
    public $avaiable;
    public $category;

        public function __construct($imgUrl,$name, $price, $size, $material, $avaiable,$category){
            $this->imgUrl = $imgUrl;
            $this->name = $name;
            $this->price = $price;
            $this->size = $size;
            $this->material = $material;
            $this->avaiable = $avaiable;
            $this->category = $category;

        }
    }
