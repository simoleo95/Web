<?php


class EUtente extends Epersona{
    
    //ATTRIBUTI 
    // è un array
    private $listavalutazioni;
    
    
    
    function __construct(){
        
        parent::construct;
        $this->listavalutazioni=NULL;
        
        
    }
    
    
    // torna un puntatore all 'array di valutazioni 
 function getListavalutazioni() {
return $this->listavalutazioni;
}

// 
function setListavalutazione(EListaValutazione $r){
    
    $this->listavalutazioni=$r;
   }


  }

?>