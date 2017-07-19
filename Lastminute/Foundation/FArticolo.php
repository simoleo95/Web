<?php


class FArticolo extends Fdb{
    
    function __construct() {
        parent::__construct();
        $this->key="IDarticolo";
        $this->result_class="EArticolo";
        $this->table="articolo";        
    }
    
public function store(EArticolo $a){
    
    
    $query="INSERT into articolo (IDarticolo,titolo,descrizione,foto,categoria) VALUES ('','".$a->getTitolo()."','".$a->getDescrizione()."','".$a->getFoto().",'".$a->getCategoria()."')";
    parent::execute($query);
    $b=$this->db->lastInsertId("IDarticolo");
    $a->setIDarticolo($b);
 }
   
       
       
       
       
       
   

    
    
    
    
}





?>
