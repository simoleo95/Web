<?php

    class CRicerca {

        public function inScadenza() {
            $ECatalogo=new ECatalogo();
            $VRicerca=  USingleton::getInstance('VRicerca');

            $risultato=$ECatalogo->ricerca();
            $VRicerca->impostaDati('dati',$risultato);

            return $VRicerca->processaTemplate();
        }

    }
?>