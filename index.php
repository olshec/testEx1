<?php 
require_once 'TurnstileCommon.php';
require_once 'TurnstileWithoutGoOut.php';
require_once 'Card.php';
require_once 'Man.php';
require_once 'Action.php';



$turnstile1=new TurnstileCommon(30);
$turnstile2=new TurnstileWithoutGoOut(30);


$card1=new Card(40);
$man1=new Man($turnstile1,$card1,Action::IN);
$man1->doAction();

$man1=new Man($turnstile1,$card1,Action::OUT);
$man1->doAction();


$card2=new Card(60);
$man2=new Man($turnstile2,$card2,Action::IN);
$man2->doAction();

$man2=new Man($turnstile2,$card2,Action::OUT);
$man2->doAction();

$man2=new Man($turnstile1,$card2,Action::OUT);
$man2->doAction();



$card3=new Card(20);
$man3=new Man($turnstile1,$card3,Action::IN);
$man3->doAction();

$man4=new Man($turnstile1,$card3,Action::OUT);
$man4->doAction();





