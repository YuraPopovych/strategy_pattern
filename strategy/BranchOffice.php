<?php
require_once 'interface/iSend.php';
class BranchOffice implements iSend {
    public function delivery($weight, $price) {
        return 'You will receive your purchase in Branch Office.' . ' Your delivery pay is ' . $price  ;
    }
}


?>