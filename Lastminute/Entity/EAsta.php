<?php


class EAsta{
    //ATTRIBUTI
    private $IdAsta;
    private $DataInizio;
    private $DataFine;


    // costruttore a cui vengono passsati dei parametri
    function __construct($Id, $Di, $Df) {
        $this->IdAsta = $Id;
        $this->DataInizio = $Di;
        $this->DataFine = $Df;
    }
    //METODI
    function getIdAsta() {
        return $this->IdAsta;
    }

    function getDataInizio() {
        return $this->DataInizio;
    }

    function getDataFine() {
        return $this->DataFine;
    }

    function setIdAsta($id) {
        $this->IdAsta = $id;
    }

    function setDataInizio($Di) {
        $this->DataInizio = $Di;
    }

    function setDataFine($Df) {
        $this->DataFine = $Df;
    }

?>