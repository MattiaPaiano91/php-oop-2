<?php
require_once __DIR__ . '/product.php';
class Food extends product
{
    public $flavor;
    public $expiration_date;


    public function __construct($name, $price, $size, $material, $avaiable, $category, $flavor, $expiration_date)
    {

        parent::__construct($name, $price, $size, $material, $avaiable, $category, $flavor, $expiration_date);
        $this->expiration_date = $expiration_date;
        $this->flavor = $flavor; 
       }
}
