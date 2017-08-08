<?php
    class FListaValutazione extends Fdb {

        function __construct() {
            parent::__construct();
            $this->table="valutazione";
            $this->key="IDvalutazione";
            $this->result_class="EValutazione";
        }

        public function loadvalutazioni($utenteV) {
            $query="SELECT ALL FROM ".$this->table."WHERE personaV ='".$utenteV."'";
            $this->execute($query);
            $valutazioni=$this->getObjects();
            return $valutazioni;
        }
    }
?>