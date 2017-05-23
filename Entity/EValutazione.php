<?php
    class EValutazione {
        private $voto;
        private $utente;

        /**
         * @return mixed
         */
        public function getVoto()
        {
            return $this->voto;
        }

        /**
         * @param mixed $voto
         */
        public function setVoto($voto)
        {
            $this->voto = $voto;
        }

        /**
         * @return mixed
         */
        public function getUtente()
        {
            return $this->utente;
        }

        /**
         * @param mixed $utente
         */
        public function setUtente($utente)
        {
            $this->utente = $utente;
        }


    }
?>