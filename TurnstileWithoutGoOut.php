<?php
require_once 'Turnstile.php';


class TurnstileWithoutGoOut extends \Turnstile
{
   
    public function __construct($price)
    {
        parent::__construct($price);
    }
    
    
    public function goOut():bool{
        return false;
    }
    
    
}

