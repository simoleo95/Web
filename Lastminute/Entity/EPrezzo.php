<?php


class EPrezzo{
    //ATTRIBUTI
    private $IDprezzo;
    private $valore;
    private $valuta;

    //METODI
    public function getIDprezzo() {
        return $this->IDprezzo;
    }

    public function getValore() {
        return $this->valore;
    }

    public function getValuta() {
        return $this->valuta;
    }

    public function setIDprezzo($IDprezzo) {
        $this->IDprezzo = $IDprezzo;
    }

    public function setValore($valore) {
        if($valore>$this->valore){
            $this->valore = $valore;
            return true;
        }
        else
            return false;
    }

    public function setValuta($valuta) {
        $this->valuta = $valuta;
    }
    public function Object_array(EPrezzo $p){
    
    $t=  get_object_vars($p);
    return $t;
}

    public function store($prezzo){
        $FPrezzo=USingleton::getInstance('FPrezzo');     
        $FPrezzo->store($prezzo);   

    }

}

?>