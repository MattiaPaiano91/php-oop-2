<?php
require_once __DIR__ . '/product.php';
class Kennel extends product
{
    public $weight;

    public function __construct($imgUrl, $name, $price, $size, $material, $avaiable, $category, $weight)
    {
        parent::__construct($imgUrl, $name, $price, $size, $material, $avaiable, $category, $weight);
        if (!is_numeric($weight)) {
            throw new Exception('IL dato del peso è da inserire tramite numero!');
        }
        $this->weight = $weight;
    }
}
