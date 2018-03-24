<?php
require_once 'Client.php';

require_once 'interface/iSend.php';
require_once 'Order.php';
require_once 'BranchOffice.php';
require_once 'novaPoshta.php';
require_once 'ukrPoshta.php';

require_once 'interface/iPay.php';
require_once 'Cash.php';
require_once 'creditCard.php';

class Shop
{

    private $s_name;
    private $s_address;
    private $s_email;
    private $s_phone;
    private static $items = array(
        array('id' => 1, 'category' => 'TV', 'name' => 'Sony', 'price' => 20000, 'rate' => 8),
        array('id' => 2, 'category' => 'Notebook', 'name' => 'HP', 'price' => 13000, 'rate' => 7),
        array('id' => 3, 'category' => 'Refrigerator', 'name' => 'Samsung', 'price' => 14000, 'rate' => 7),
        array('id' => 4, 'category' => 'Vacuum', 'name' => 'LG', 'price' => 8500, 'rate' => 7));
    private $order;

    public function __construct($s_name, $s_address, $s_email, $s_phone)
    {
        $this -> s_name = $s_name;
        $this -> s_address = $s_address;
        $this -> s_email= $s_email;
        $this -> s_phone = $s_phone;
    }


    public function set_order($order){
        $this -> order = $order;
    }

    public function get_order(){
        return $this -> order;
    }
}

##########FINAL TEST#############

$shop1 = new Shop('Shop1', 'Lviv', 'email1@', '093');
$shop1 -> set_order((new Order()));
$shop1 -> get_order() -> set_client(new Client('Yura','Popovyc', '032', '@gmail'));
$shop1 -> get_order() -> set_pay(New Cash);
echo $shop1 -> get_order() -> get_pay() -> pay() . "<br>";
$shop1 -> get_order() -> set_send(new BranchOffice());
echo $shop1->get_order() ->  get_send() -> delivery(3,1000);


?>