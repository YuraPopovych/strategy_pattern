<?php
/*
$products = array(
    array('id' => '1', 'name' => 'broccoli', 'desc' => 'broccoli', 'price' => '1200'),
    array('id' => '2', 'name' => 'butter', 'desc' => 'butter', 'price' => '1300'),
    array('id' => '3', 'name' => 'cheese', 'desc' => 'cheese', 'price' => '1400'),
    array('id' => '4', 'name' => 'chickenleg', 'desc' => 'chicken leg', 'price' => '1500'));
echo var_dump($products);

    class Test
    {
        private static $products = array(
            0 => array(
                "category" => "TV",
                "name" => "Samsung",
                "price" => 10000,
                "rating" => 8.3,
            ),
            1 => array(
                "category" => "Notebook",
                "name" => "x",
                "price" => 100,
                "rating" => 6.3,
            ),
            2 => array(
                "category" => "LG G3",
                "name" => "x",
                "price" => 100,
                "rating" => 6.3,
            ),
        );

        public function get_array(){
            return self::$products;
        }
    }


    $a = new Test;


    echo var_dump($a -> get_array());

$products = array(
    array('id' => '1', 'name' => 'broccoli', 'desc' => 'broccoli', 'price' => '1200'),
    array('id' => '2', 'name' => 'butter', 'desc' => 'butter', 'price' => '1300'),
    array('id' => '3', 'name' => 'cheese', 'desc' => 'cheese', 'price' => '1400'),
    array('id' => '4', 'name' => 'chickenleg', 'desc' => 'chicken leg', 'price' => '1500'),
    array('id' => '5', 'name' => 'chocolatecookies', 'desc' => 'chocolate cookies', 'price' => '1600'),
    array('id' => '6', 'name' => 'cornonthecob', 'desc' => 'corn on the cob', 'price' => '1700'),
    array('id' => '7', 'name' => 'freerangeeggs', 'desc' => 'free range eggs', 'price' => '1800'),
    array('id' => '8', 'name' => 'milk', 'desc' => 'milk', 'price' => '1900'),
    array('id' => '9', 'name' => 'organicmeatpatties', 'desc' => 'organic meat patties', 'price' => '2000'),
    array('id' => '10', 'name' => 'parmaham', 'desc' => 'parma ham', 'price' => '2010'),
    array('id' => '11', 'name' => 'pumpkinseedbun', 'desc' => 'pumpkin seed bun', 'price' => '2020'),
    array('id' => '12', 'name' => 'redcurrants', 'desc' => 'red currants', 'price' => '2030'),
    array('id' => '13', 'name' => 'sausages', 'desc' => 'sausages', 'price' => '2040'),
    array('id' => '14', 'name' => 'seedlesswatermelon', 'desc' => 'seedless watermelon', 'price' => '2050'),
    array('id' => '15', 'name' => 'sesameseedbagel', 'desc' => 'sesame seed bagel', 'price' => '2060'),
    array('id' => '16', 'name' => 'sunflowerseedloaf', 'desc' => 'sunflower seed loaf', 'price' => '2070')
);
echo "<pre>"; print_r(array_chunk($products, 5, true));
*/


class Order {
    protected  $id ;
    private $client;
    public function __construct($client)
    {

        $this -> client = $client;
        $this -> id = 0;


    }

    public function client(){
        $this -> id++;
        return $this -> client . $this -> id ;

    }



}
$a = new Order('Vasia');
echo $a -> client();
$b = new Order('Valik');
echo $b -> client();



/*
class Counter {

    protected $counter;

    public function __construct() {

        $this->counter = 0;
    }

    public function getCounterIncrement() {

        $this->counter++;
        return $this->counter;
    }
}

$counter = new Counter;
print $counter->getCounterIncrement(); // outputs 1
print $counter->getCounterIncrement();
*/
?>