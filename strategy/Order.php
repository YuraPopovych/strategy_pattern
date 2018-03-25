<?php
require_once 'novaPoshta.php';
require_once 'ukrPoshta.php';
require_once 'BranchOffice.php';
require_once 'interface/iSend.php';

require_once 'Client.php';
require_once 'Shop.php';


class Order {
    private $client;
    private $price;
    private $send;
    private $pay;
    private $item;


    public function set_send($delivery_method){
        $this -> send = $delivery_method;
    }


    public function get_send(){
        return $this -> send;
    }


    public function set_client($client_info){
        $this -> client = $client_info;

    }

    public function get_client(){
        return $this -> client;
    }

    public function set_pay($pay){
        $this -> pay = $pay;
    }

    public function get_pay(){
        return $this -> pay;
    }

    public static function item(){
        return Shop::get_items();
    }


}

var_dump(Order::item());

?>