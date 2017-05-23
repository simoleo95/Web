<?php
    class EValutazione {

        // ATTRIBUTI //
        private $voto;
        private $utente;

        // METODI //
        public function getVoto() {
            return $this->voto;
        }

        public function setVoto($voto) {
            $this->voto = $voto;
        }

        public function getUtente() {
            return $this->utente;
        }

        public function setUtente($utente) {
            $this->utente = $utente;
        }


    }
?>