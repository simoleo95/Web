<?php
    class FListaValutazione extends Fdb {

        function __construct() {
            parent::__construct();
            $this->table="valutazionne";
            $this->key="IDvalutazione";
            $this->result_class="EValutazioine";
        }

        public function loadvalutazioni($utenteV) {
            $query="SELECT * FROM ".$this->table."WHERE utenteV='".$utenteV."'";
            parent::execute($query);
            $valutazioni=parent::getObjects();
            return $valutazioni;
        }
    }
?>