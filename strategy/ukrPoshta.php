<?php
require_once 'interface/iSend.php';
class ukrPoshta implements iSend {
    private $amount;
    public function delivery($weight,$price) {

        if ($price > 10000) {
            return 'Ви обрали спосіб доставки  Укр поштою.' . ' Вітаємо! У вас безкоштовна доставка, тому що вартість вашого замовлення перевищує 10 000 грн.';
        }
        else {
            return 'Ви обрали спосіб доставки Укр поштою.' . ' Вартість доставки ' .  $price = $price + ($weight * 6);
        }
    }


}



?>