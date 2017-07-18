<?php
    class EValutazione {

        // ATTRIBUTI //
        private $IDvalutazione;
        private $voto;
        private $utenteC;
        private $utenteV;

        // METODI //
        public function getVoto() {
            return $this->voto;
        }

        public function setVoto($voto) {
            $this->voto = $voto;
        }

        function getUtenteC() {
            return $this->utenteC;
        }

        function getUtenteV() {
            return $this->utenteV;
        }

        function setUtenteC(EUtente $utenteC) {
            $this->utenteC = $utenteC;
        }

        function setUtenteV(EUtente $utenteV) {
            $this->utenteV = $utenteV;
        }
        function getIDvalutazione() {
            return $this->IDvalutazione;
        }

        function setIDvalutazione($IDvalutazione) {
            $this->IDvalutazione = $IDvalutazione;
        }



    }
?>