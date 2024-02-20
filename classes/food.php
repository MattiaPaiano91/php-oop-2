<?php
require_once __DIR__ . '/product.php';
class Food extends product
{
    public $flavor;
    public $expiration_date;


    public function __construct($imgUrl, $name, $price, $size, $material, $avaiable, $category, $flavor, $expiration_date)
    {
        parent::__construct($imgUrl, $name, $price, $size, $material, $avaiable, $category, $flavor, $expiration_date);
        if (!is_string($flavor)) {
            throw new Exception('Il sapore deve essee inserito come testo');
        }
        $this->expiration_date = $expiration_date;
        $this->flavor = $flavor; 
       }
}
