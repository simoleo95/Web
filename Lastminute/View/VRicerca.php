<?php

    class VRicerca extends View {

        public function processaTemplate() {
            global $config;

            return $this->fetch($config['smarty']['template_dir'].'\ricerca.tpl');
        }

        public function getAjax() {
            if (isset($_REQUEST['ajax']))
                return $_REQUEST['ajax'];
            else
                return false;
        }

        public function getNum() {
            if (isset($_REQUEST['num']))
                return $_REQUEST['num'];
            else
                return false;
        }

        public function displayTemplate() {
            global $config;
            $this->display($config['smarty']['template_dir'].'\ricerca.tpl');
        }
       
    }
?>