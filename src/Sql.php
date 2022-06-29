<?php

include_once('PersistenceInterface.php');

class Sql implements PersistenceInterface{

    public function save(){
        return "Guardado en sql";
    }

}