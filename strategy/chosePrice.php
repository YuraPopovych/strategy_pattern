<?php
class chosePrice implements iChose{
    public function get_result($ar,$key){
        return $ar[$key] . " Your price chosen!!!";
    }

}


?>