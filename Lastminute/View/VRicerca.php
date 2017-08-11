<?php

    class VRicerca extends View {

        public function impostaDati($key,$valore) {
            $this->assign($key,$valore);
        }

        public function processaTemplate() {
            global $config;
            return $this->fetch($config['smarty']['template_dir'].'\ricerca.tpl');
        }
       
    }
?>