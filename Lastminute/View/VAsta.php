<?php

    class VAsta extends View{
        private $layout='\tasto_insAnnuncio.tpl';

        public function getId() {
            if (isset($_REQUEST['id_asta']))
                return $_REQUEST['id_asta'];
            else
                return false;
        }
        public function getesto() {
            if (isset($_REQUEST['testo']))
                return $_REQUEST['testo'];
            else
                return false;
        }

        public function getTitolo() {
            if (isset($_POST['titolo']))
                return $_POST['titolo'];
            else
                return false;
        }

        public function getDescrizione() {
            if (isset($_POST['descrizione']))
                return $_POST['descrizione'];
            else
                return false;
        }

        public function getFoto() {
            if (isset($_FILES['foto']['tmp_name']))
                return base64_encode(file_get_contents($_FILES['foto']['tmp_name']));
            else
                return false;
        }

        public function getCategoria() {
            if (isset($_POST['categoria']))
                return $_POST['categoria'];
            else
                return false;
        }

        public function getData() {
            if (isset($_POST['dataf']))
                return $_POST['dataf'];
            else
                return false;
        }

        public function getPrezzo() {
            if (isset($_POST['prezzop']))
                return $_POST['prezzop'];
            else
                return false;
        }

        public function getOfferta() {
            if (isset($_POST['offerta']))
                return $_POST['offerta'];
            else
                return false;
        }

        public function processaTemplate() {
            global $config;
            $contenuto=$this->fetch($config['smarty']['template_dir'].$this->layout);
            return $contenuto;
        }

        public function setLayout($layout) {
            $this->layout=$layout;
        }
    }
?>