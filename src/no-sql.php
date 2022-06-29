<?php

include_once('PersistenceInterface.php');

class NoSql implements PersistenceInterface{

    public function save(){
        return "Guardado en NoSql";
    }

}