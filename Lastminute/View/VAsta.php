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
            if (isset($_REQUEST['titolo']))
                return $_REQUEST['titolo'];
            else
                return false;
        }

        public function getDescrizione() {
            if (isset($_REQUEST['descrizione']))
                return $_REQUEST['descrizione'];
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
            if (isset($_REQUEST['categoria']))
                return $_REQUEST['categoria'];
            else
                return false;
        }

        public function getData() {
            if (isset($_REQUEST['dataf']))
                return $_REQUEST['dataf'];
            else
                return false;
        }

        public function getPrezzo() {
            if (isset($_REQUEST['prezzop']))
                return $_REQUEST['prezzop'];
            else
                return false;
        }

        public function getOfferta() {
            if (isset($_REQUEST['offerta']))
                return $_REQUEST['offerta'];
            else
                return false;
        }
        
           public function getGroup() {
            if (isset($_REQUEST['group']))
                return $_REQUEST['group'];
            else
                return false;
        }

        public function getAjax() {
            if (isset($_REQUEST['ajax']))
                return $_REQUEST['ajax'];
            else
                return false;
        }
        

        public function processaTemplate() {
            global $config;
            $contenuto=$this->fetch($config['smarty']['template_dir'].$this->layout);
            return $contenuto;
        }

        public function displayTemplate() {
            global $config;
            $this->display($config['smarty']['template_dir'].$this->layout);
        }

        public function setLayout($layout) {
            $this->layout=$layout;
        }
    }
?>