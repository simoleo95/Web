<?php


class EUtente extends Epersona{
    
    //ATTRIBUTI 
    // è un array
    private $listavalutazioni;

    
    // torna un puntatore all 'array di valutazioni 
 function getListavalutazioni() {
return $this->listavalutazioni;
}

// 
function setListavalutazione($r){
    
    $this->listavalutazioni=$r;
   }


  }

?>