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
public function Object_array(EUtente $p){
    
    $t=  get_object_vars($p);
    return $t;
}
public function autentica($u,$p){
    $Futente=new FUtente();
    $f=$Futente->load($u);
     if($f!=false){
         if ($p==$f->getPassword()) {
             return '0';
             
         }
    else {return '1';}
}
else return '2';
}
}
?>