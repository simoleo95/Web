<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class FListaValutazione extends fdb{

function __construct(){
    parent::__construct();    
    $this->table="valutazionne";
    $this->key="IDvalutazione";
    $this->result_class="EValutazioine";

}

public function loadvalutazioni($utenteV){
    $query="SELECT * FROM ".$this->table."WHERE utenteV='".$utenteV."'";
    parent::execute($query);
    $valutazioni=parent::getObjects();
    return $valutazioni;
    }







}






?>