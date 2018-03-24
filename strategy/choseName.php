<?php

require_once 'interface/iChose.php';
class choseName implements iChose{
    public function get_result($ar,$key){
        return  array_search($key, $ar). " Your name chosen!!!";
    }

}

?>