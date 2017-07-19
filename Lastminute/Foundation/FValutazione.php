<?php

class FValutazione extends Fdb{
    
    function __construct(){
        parent::__construct();        
        $this->key="IDvalutazione";
        $this->result_class="EValutazione";
        $this->table="valutazione";        
        }
    
        
public function store(EValutazione $v){
    $uc=$v->getUtenteC()->getUsername();
    $uv=$v->getUtenteV()->getUsername();
    $query="INSERT into valutazione (IDvalutazione,valutazione,personaV,personaC) VALUES ('','".$v->getVoto()."','".$uv."','".$uc."')";
    parent::execute($query);
    $b=$this->db->lastInsertId("IDvalutazione");
    $v->setIDvalutazione($b);
    
    
}
    
    public function load($key){
        $valutazione=parent::load($key);
        $utentev=new FUtente();
        $utentec=new FUtente();
        $u1 =$utentec->load($valutazione->personaC);
        $u2= $utentev->load($valutazione->personaV);
        $valutazione->setUtenteC($u1);
        $valutazione->setUtenteV($u2);
        return $valutazione;
       }
    
    
}










?>