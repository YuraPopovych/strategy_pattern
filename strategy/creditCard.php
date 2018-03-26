<?php

require_once 'interface/iPay.php';

class creditCard implements iPay
{
    private $number;
    private $cvv;
    private $date;


    public function __construct($number, $cvv, $date)
    {
        $this -> number = hash('md5', $number);
        $this -> cvv = hash('md5', $cvv);
        $this -> date = hash('md5', $date);




    }

    public function pay(){

            return "Ви обрали спосіб платежу за допомогою кредитної картки.";
        }

}
