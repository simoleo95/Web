<?php

    class VRicerca extends View {

        public function impostaDati($key,$valore) {
            $this->assign($key,$valore);
        }

        public function processaTemplate() {
            return $this->fetch('C:\xampp\htdocs\Lastminute\templates\templates\ricerca.tpl');
        }
    }
?>