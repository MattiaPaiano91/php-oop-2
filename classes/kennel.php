<?php
require_once __DIR__ . '/product.php';
class Kennel extends product
{
    public $weight;

    public function __construct($name, $price, $size, $material, $avaiable, $category, $weight)
    {
        parent::__construct($name, $price, $size, $material, $avaiable, $category, $weight);
        $this->weight = $weight;
    }
}


