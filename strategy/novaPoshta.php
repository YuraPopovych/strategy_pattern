<?php
require_once 'interface/iSend.php';
class novaPoshta implements iSend {
    public function delivery($weight,$price) {

        if ($price > 10000)
            return 'Обрано спосіб отримання товару у відділенні Нової пошти.' . ' Вітаємо! У вас безкоштовна доставка, тому що вартість вашого замовлення перевищує 10 000 грн.' . " Загальна вартість до сплати $price грн. " ;
        else {
            $delivery_price = ($weight * 6);
            $amount = $price + $delivery_price;
            return 'Обрано спосіб отримання товару у відділенні Нової пошти.' . " Вартість доставки $delivery_price грн. " . " Загальна вартість до оплати $amount грн. "  ;
        }
    }
}



?>