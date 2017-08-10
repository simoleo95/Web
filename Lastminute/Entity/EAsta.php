<?php


class EAsta{
    //ATTRIBUTI
    private $IDasta;
    private $dataP;
    private $dataF;
    private $prezzoI;
    private $prezzoF;
    private $utentecreatore;
    private $utentevincitore;
    private $articolo;

    //METODI
    function getIdAsta() {
        return $this->IDasta;
    }

    function getDataP() {
        return $this->dataP;
    }

    function getDataF() {
        return $this->dataF;
    }

    function getPrezzoF() {
        return $this->prezzoF;
    }

    function setIdAsta($IdAsta) {
        $this->IDasta = $IdAsta;
    }

    function setDataP($dataP) {
        $this->dataP = $dataP;
    }

    function setDataF($dataF) {
        $this->dataF = $dataF;
    }

    function setPrezzoI(EPrezzo $prezzoI) {
        $this->prezzoI = $prezzoI;
    }

    function setPrezzoF(EPrezzo $prezzoF) {
        $this->prezzoF = $prezzoF;
    }

   
    function setUtentecreatore(EUtente $utentecreatore) {
        $this->utentecreatore = $utentecreatore;
    }

    function setUtentevincitore(EUtente $utentevincitore) {
        $this->utentevincitore = $utentevincitore;
    }

    public function offerta(EUtente $u,  EPrezzo $p){
        
        if($p->getvalore()> $this->prezzoF->getvalore()){
            $this->utentevincitore=$u;
        $this->prezzoF=$p;}
        else 
            return "errore";
            
        
    }
    function getPrezzoI() {
        return $this->prezzoI;
    }

    function getUtentecreatore() {
        return $this->utentecreatore;
    }

    function getUtentevincitore() {
        return $this->utentevincitore;
    }

    function getArticolo() {
        return $this->articolo;
    }

    function setArticolo(EArticolo $articolo) {
        $this->articolo = $articolo;
    }


public function Object_array(EAsta $p){
    
    $t=get_object_vars($p);
    return $t;
}

}
?>