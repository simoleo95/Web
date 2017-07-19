<?php

class FUtente extends Fdb{
    function __construct() {
        parent::__construct();        
        $this->result_class("EUtente");
        $this->key="username";
        $this->table="persona";
    }


public function load($key){
    $utente= parent::load($key);
    $Fvalutazione= new FListaValutazione();
    $Fvalutazione->loadvalutazioni($utente->getUsername());
    $utente->setListavalutazuione($Fvalutazione);
    
    return $utente;
 }
public function store(EUtente $u){
    $query="INSERT into persona(username,nome,cognome,password,email) VALUES ('".$u->getUsername()."','".$u->getNome()."','".$u->getCognome().",'".$u->getPassword()."','".$u->getEmail()."')";
    parent::execute($query);
    
    
    
    
    
    
    
}

}


?>