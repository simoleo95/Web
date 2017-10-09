<?php

    class VRicerca extends View {

        private $layout;

        public function processaTemplate() {
            global $config;

            return $this->fetch($config['smarty']['template_dir'].$this->layout);
        }

        public function getCategoria() {
            if (isset($_REQUEST['categoria']))
                return $_REQUEST['categoria'];
            else
                return false;
        }

        public function setLayout($layout) {
            $this->layout=$layout;
        }
    }
?>