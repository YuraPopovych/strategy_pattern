<?php
require_once 'novaPoshta.php';
require_once 'ukrPoshta.php';
require_once 'BranchOffice.php';
require_once 'interface/iSend.php';

require_once 'Client.php';
require_once 'Shop.php';


class Order
{
    private $client;
    private $price;
    private $send;
    private $pay;

    private $item_id;
    private $item_category;
    private $item_name;
    private $item_price;
    private $item_rate;
    private $item_weight;

    public function set_send($delivery_method)
    {
        $this->send = $delivery_method;
    }


    public function get_send()
    {
        return $this->send;
    }


    public function set_client($client_info)
    {
        $this->client = $client_info;

    }

    public function get_client()
    {
        return $this->client;
    }

    public function set_pay($pay)
    {
        $this->pay = $pay;
    }

    public function get_pay()
    {
        return $this->pay;
    }

    public function set_item($name)
    {
        #Shop::set_items($name);
        for ($i = 0; $i < count(Shop::$items); $i++) {
            if (in_array(($name), Shop::$items[$i])) {
                $this->item_id = Shop::$items[$i]['id'];
                $this->item_category = Shop::$items[$i]['category'];
                $this->item_name = Shop::$items[$i]['name'];
                $this->item_price = Shop::$items[$i]['price'];
                $this->item_rate = Shop::$items[$i]['rate'];
                $this->item_weight = Shop::$items[$i]['weight'];
            }
        }
    if (!isset($this -> item_name)){
        echo "We have no such product";
    }

    }

    public function get_item_id(){
        return $this -> item_id;

    }

    public function get_item_category(){
        return $this -> item_category;

        }

    public function get_item_name(){
        return $this -> item_name;

    }
    public function get_item_price(){
        return $this -> item_price;

    }
    public function get_item_rate(){
        return $this -> item_rate;

    }

    public function get_item_weight(){
        return $this -> item_weight;

    }
    }







?>