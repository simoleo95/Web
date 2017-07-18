<?php
    class EArticolo {

        // ATTRIBUTI //
        private $titolo;
        private $descrizione;
        private $foto;
        private $categoria;
        private $IDarticolo;
        

        // costruttore a cui vengono passsati dei parametri
    
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




    }
?>
/**
 * Created by PhpStorm.
 * User: Francesco
 * Date: 25/05/2017
 * Time: 14:22
 */