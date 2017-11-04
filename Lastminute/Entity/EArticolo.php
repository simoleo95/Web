<?php
    class EArticolo {

        // ATTRIBUTI //
        private $titolo;
        private $descrizione;
        private $foto;
        private $categoria;
        private $IDarticolo;

        // METODI //

        function getTitolo() {
            return $this->titolo;
        }

        function getDescrizione() {
            return $this->descrizione;
        }

        function getFoto() {
            return $this->foto;
        }

        function getCategoria() {
            return $this->categoria;
        }

        function setTitolo($titolo) {
            $this->titolo = $titolo;
        }

        function setDescrizione($descrizione) {
            $this->descrizione = $descrizione;
        }

        function setFoto($foto) {
            $this->foto = $foto;
        }

        function setCategoria($categoria) {
            $this->categoria = $categoria;
        }
        function getIDarticolo() {
            return $this->IDarticolo;
        }

        function setIDarticolo($IDvalutazione) {
            $this->IDarticolo = $IDvalutazione;
        }

        public function Object_array(EArticolo $p){
            $t=get_object_vars($p);
            return $t;
        }

        public function store($EArticolo){
            $FArticolo=USingleton::getInstance('FArticolo');
            $FArticolo->store($EArticolo);
        }
    }
?>
