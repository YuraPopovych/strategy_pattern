<?php
require_once 'interface/iSend.php';

class onPlace implements iSend {
    public function delivery() {
        return 'You have been chosen on place delivery';
    }
}




?>