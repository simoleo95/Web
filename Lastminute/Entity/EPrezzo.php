<?php


class EPrezzo{
    //ATTRIBUTI
    private $IDprezzo;
    private $valore;
    private $valuta;

    //METODI
    function getIDprezzo() {
        return $this->IDprezzo;
    }

    function getValore() {
        return $this->valore;
    }

    function getValuta() {
        return $this->valuta;
    }

    function setIDprezzo($IDprezzo) {
        $this->IDprezzo = $IDprezzo;
    }

    function setValore($valore) {
        $this->valore = $valore;
    }

    function setValuta($valuta) {
        $this->valuta = $valuta;
    }
public function Object_array(EPrezzo $p){
    
    $t=  get_object_vars($p);
    return $t;
}

}

?>