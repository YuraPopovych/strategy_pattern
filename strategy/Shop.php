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
    public static $items = array(
        array('id' => 1, 'category' => 'TV', 'name' => 'Sony 40RE453', 'price' => 20000, 'rate' => 8, 'weight' => 5),
        array('id' => 2, 'category' => 'Notebook', 'name' => 'HP EliteBook', 'price' => 13000, 'rate' => 7, 'weight' => 2 ),
        array('id' => 3, 'category' => 'Refrigerator', 'name' => 'Samsung RB1102', 'price' => 14000, 'rate' => 7, 'weight' => 70),
        array('id' => 4, 'category' => 'Vacuum', 'name' => 'LG AGB6', 'price' => 8500, 'rate' => 7, 'weight' => 5));
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

    /*
    public static function set_items($name){
        #return self::$items[$name];
        for($i = 0; $i < count(self::$items); $i++) {
            if (in_array(($name), self::$items[$i])) {
                $chose = self::$items[$i];
                return $chose;
            }
        }
    }

    */


}



$shop1 = new Shop('Shop1', 'Lviv', 'email1@', '032');
$shop1 -> set_order((new Order()));
$shop1 -> get_order() -> set_client(new Client('Daniel','Kahneman', '032', '@gmail'));
$shop1 -> get_order() -> set_item('LG AGB6');
echo $shop1 -> get_order() -> get_item_name() . " " . $shop1 -> get_order() -> get_item_rate();
$shop1 -> get_order() -> set_pay(New Cash);
echo $shop1 -> get_order() -> get_pay() -> pay() . "<br>";
$shop1 -> get_order() -> set_send(new ukrPoshta());
echo $shop1->get_order() ->  get_send() -> delivery($shop1->get_order() ->  get_item_weight(),$shop1->get_order() ->  get_item_price());



#print_r(Shop::set_items('Sony 40RE453'));


?>