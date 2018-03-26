<?php
require_once 'interface/iPay.php';
class Cash implements iPay  {

    public function pay(){
            return "Ви обрали спосіб платежу за допомогою готівки";
        }

    }



?>