<?php

    class CRicerca {

        public function inScadenza() {
            $ECatalogo=new ECatalogo();
            $VRicerca=  USingleton::getInstance('VRicerca');

            $ajax = $VRicerca->getAjax();
			
			

            if($ajax) {
                $num = $VRicerca->getNum();
                $risultato=$ECatalogo->inScadenza($num);
                $VRicerca->impostaDati('dati',$risultato);
                $VRicerca->displayTemplate();
            }
            else {
                $risultato=$ECatalogo->inScadenza("");
                $VRicerca->impostaDati('dati',$risultato);
                return $VRicerca->processaTemplate();
            }

        }

    }
?>