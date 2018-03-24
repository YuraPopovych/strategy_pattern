<?php
require_once 'creditCard.php';
require_once 'Cash.php';
require_once 'interface/iPay.php';

class Client {

    private $first_name;
    private $second_name;
    private $phone;
    private $email;
    private $pay_method;

    public function __construct($first_name,$second_name,$phone,$email)
    {
        $this -> first_name = $first_name;
        $this -> second_name = $second_name;
        $this -> phone = $phone;
        $this -> email = $email;

    }
    public function pay($pay_method){
        $this -> pay_method = $pay_method;
        return $this -> pay_method -> pay();
    }

    public function getFirstName(){
        return $this -> first_name;
    }

    public function getSecondName(){
        return $this -> second_name;
    }

    public function getPhone(){
        return $this -> phone;
    }


}
/*
$a = new Client('Yura','Popovych','0934361147');
echo $a -> pay(new creditCard(123,111,2018));
*/
?>

