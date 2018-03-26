<?php
require_once 'interface/iSend.php';
class ukrPoshta implements iSend {
    private $amount;
    public function delivery($weight,$price) {
        $delivery_price = ($weight * 4);
        $amount = $price + $delivery_price;

        if ($price > 10000) {
            return 'Обрано спосіб отримання товару у відділенні  Укр пошти.' . ' Вітаємо! У вас безкоштовна доставка, тому що вартість вашого замовлення перевищує 10 000 грн.' .  " Загальна вартість до оплати $price грн. ";
        }
        else {
            $delivery_price = ($weight * 6);
            $amount = $price + $delivery_price;
            return 'Обрано спосіб отримання товару у відділенні Укр пошти.' . " Вартість доставки $delivery_price грн. " . " Загальна вартість $amount грн. " ;
        }
    }


}



?>