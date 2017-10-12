<?php

    class CRicerca {

        public function inScadenza() {
            $ECatalogo=new ECatalogo();
            $VRicerca=  USingleton::getInstance('VRicerca');

            $VAsta = USingleton::getInstance('VAsta');
            $ajax = $VAsta->getAjax();

            $risultato=$ECatalogo->inScadenza();
            $VRicerca->impostaDati('dati',$risultato);

            if($ajax) {
                // $VRicerca->processaTemplate();
                $VRicerca->display();
            }
            else
                return $VRicerca->processaTemplate();
        }

    }
?>