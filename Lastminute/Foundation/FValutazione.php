<?php

class FValutazione extends Fdb{
    
    function __construct(){
        parent::__construct();
        parent::connect();
        $this->key="IDvalutazione";
        $this->result_class="EValutazione";
        $this->table="valutazione";        
        }
    
        
public function loadvalutazioni($utenteV){
    $query="SELECT * FROM ".$this->table."WHERE utenteV='".$utenteV."'";
    parent::execute($query);
    $valutazioni=parent::getObjects();
    return $valutazioni;
    }
    
    
    
    
}










?>