<?php
require_once 'Card.php';


abstract class Turnstile
{
    private $price;
    public function __construct($price)
    {
        $this->price=$price;
    }
    
    public function checkCard(Card $card):bool{
        if($card->takeSum($this->price))
            return true;
        return false;
    }
    
    public function goIn(Card $card):bool{
        return $this->checkCard($card);
    }
    
    public abstract function goOut():bool;
    
    
}

