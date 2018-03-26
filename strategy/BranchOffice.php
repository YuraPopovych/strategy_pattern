<?php
require_once 'interface/iSend.php';
class BranchOffice implements iSend {
    public function delivery($weight, $price) {
        return 'Обрано спосіб отримання товару у відділенні офісу.' . ' Загальна сума до сплати ' . $price  ;
    }
}




?>