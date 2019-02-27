<?php
require_once 'Action.php';
require_once 'Turnstile.php';
require_once 'Card.php';


class Man
{

    private $turnstile;
    private $card;
    private $action;
    
    public function __construct(Turnstile $turnstile,
        Card $card, int $action)
    {
            $this->setTurnstile($turnstile);
            $this->setCard($card);
            $this->setAction($action);
    }
    
    
    public function doAction():bool
    {
        $result=false;
        switch($this->action)
        {
            case Action::IN:
                $result=$this->turnstile->goIn($this->card);
                break;
            case Action::OUT:
                $result=$this->turnstile->goOut();
                break;
            default:$result=false;
        }
        if($result)
            echo "result positive".PHP_EOL;
        else 
            echo "result negative".PHP_EOL;
        return $result;
    }
    
    
    
    /**
     * @return mixed
     */
    public function getTurnstile()
    {
        return $this->turnstile;
    }

    /**
     * @return mixed
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $turnstile
     */
    public function setTurnstile($turnstile)
    {
        $this->turnstile = $turnstile;
    }

    /**
     * @param mixed $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    
}

