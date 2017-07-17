<?php


class EAsta{
    //ATTRIBUTI
    private $IdAsta;
    private $dataP;
    private $dataF;
    private $prezzoI;
    private $prezzoF;
    private $utentecreatore;
    private $utentevincitore;


    //METODI
    function getIdAsta() {
        return $this->IdAsta;
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
        $this->IdAsta = $IdAsta;
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


}
?>