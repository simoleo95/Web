<?php
    class EArticolo {

        // ATTRIBUTI //
        private $Name;
        private $Descrizione;
        private $Foto;
        private $Categoria;

        // costruttore a cui vengono passsati dei parametri
        function __construct($nome, $descrizione, $foto, $categoria)
        {
            $this->nome = $nome;
            $this->descrizione = $descrizione;
            $this->foto = $foto;
            $this->categoria = $categoria;
        }

        // METODI //

        function getName() {
            return $this->Name;
        }

        function getDescrizione() {
            return $this->Descrizione;
        }

        function getCategoria() {
            return $this->Categoria;
        }

        function setNme($Nme) {
            $this->Nme = $Nme;
        }

        function setDescrizione($Descrizione) {
            $this->Descrizione = $Descrizione;
        }

        function setCategoria($Categoria) {
            $this->Categoria = $Categoria;
        }

    }
?>
/**
 * Created by PhpStorm.
 * User: Francesco
 * Date: 25/05/2017
 * Time: 14:22
 */