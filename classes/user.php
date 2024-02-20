<?php
require_once __DIR__ . '/product.php';
class User
{
    public $userName;
    public $password;
    public $cardNumber;
    public $creditCardExpirationDate;

    public function __construct($userName, $creditCardExpirationDate)   
    {
        if(!is_string($userName)) {
            throw new Exception('Username non valido');
        }
        
        $this->userName = $userName;
        $this->creditCardExpirationDate = $creditCardExpirationDate;
    }
}
