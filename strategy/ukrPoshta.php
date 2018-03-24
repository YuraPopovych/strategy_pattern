<?php
require_once 'interface/iSend.php';
class ukrPoshta implements iSend {
    public function delivery($weight,$price) {

        if ($price > 1000)
            return 'You have been chosen Ukr Posta delivery.' . ' You have free delivery';
        else {
            return 'You have been chosen Ukr Posta delivery.' . ' .Your delivery pay is ' . $price = $price + ($weight * 3) ;
        }
    }
}



?>