<?php
require_once 'interface/iPay.php';
class Cash implements iPay  {

    #private $money;





    public function pay(){
            return "You made purchase by cash" ;
        }






    }



?>