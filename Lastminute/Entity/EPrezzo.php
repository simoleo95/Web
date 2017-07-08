<?php


class EPrezzo{
    //ATTRIBUTI
    private $Importo;
    private $Valuta;

    // costruttore a cui vengono passsati dei parametri
    function __construct($Im, $Va) {
        $this->Importo = $Im;
        $this->Valuta = $Va;
    }
    //METODI
    function getImporto() {
        return $this->Importo;
    }

    function getValuta() {
        return $this->Valuta;
    }
    }

    function setImporto($Im) {
        $this->Importo = $Im;
    }

    function setValuta($Val) {
        $this->Valuta = $Val;
    }

?>