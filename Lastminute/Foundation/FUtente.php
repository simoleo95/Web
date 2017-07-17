<?php

class FUtente extends Fdb{
    function __construct() {
        parent::__construct();
        parent::connect();
        $this->result_class("EUtente");
        $this->key="username";
        $this->table="persona";
    }


public function load($key){
    $utente= parent::load($key);
    $Fvalutazione= new FValutazione();
    $Fvalutazione->loadvalutazioni($utente->getUsername());
    $utente->setListavalutazuione($Fvalutazione);
    
    return $utente;
 }


}


?>