<?php

class User{


    private $persistence;


    public function __construct(PersistenceInterface $persistence)
    {
        $this->persistence = $persistence;
    }

    public function save(){
        return $this->persistence->save();     
    }


}