<?php
    class EArticolo {

        // ATTRIBUTI //
        private $Nome;
        private $Descrizione;
        private $Foto;
        private $Categoria;


        // METODI //

        public function getNome()
        {
            public function getNome() {
            return $this->Nome;
        }
        public function setNome($nome)
        {
            public function setNome($nome) {
            $this->Nome = $nome;
        }

        public function getDescrizione()
        {
            public function getDescrizione() {
            return $this->Descrizione;
        }

        public function setDescrizione($descrizione)
        {
            public function setDescrizione($descrizione) {
            $this->Descrizione = $descrizione;
        }

        public function getFoto()
        {
            public function getFoto() {
            return $this->Foto;
        }

        public function setFoto($nome)
        {
            public function setFoto($foto) {
            $this->Foto = $foto;
        }

        public function getCategoria()
        {
            public function getCategoria() {
            return $this->Categoria;
        }

        public function setCategoria($categoria)
        {
            public function setCategoria($categoria) {
            $this->Categoria = $categoria;
        }}
?>
/**
 * Created by PhpStorm.
 * User: Francesco
 * Date: 25/05/2017
 * Time: 14:22
 */