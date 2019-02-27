<?php

class Card
{

    private $sum;

    public function __construct(int $sum)
    {
        $this->sum=$sum;
    }
    
    public function addSum(int $sum){
        $this->sum+=$sum;
    }
    
    public function takeSum(int $price):bool{
        if($this->sum<$price)
            return false;
        $this->sum-=$price;
        return true;
    }
    
    
    
}

