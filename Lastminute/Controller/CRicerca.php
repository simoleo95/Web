<?php

    class CRicerca {
        //Mostra tutte le aste in corso
        public function inScadenza() {
            $ECatalogo=new ECatalogo();
            $VRicerca=  USingleton::getInstance('VRicerca');

            $ajax = $VRicerca->getAjax();
			
			

            if($ajax) {
                $num = $VRicerca->getNum();
                $risultato=$ECatalogo->inScadenza($num);
                $VRicerca->impostaDati('dati',$risultato);
                $VRicerca->displayTemplate1();
            }
            //Se non ci sono aste in corso viene mostrata la pagina vuota
            else {
                $risultato=$ECatalogo->inScadenza("");
                $VRicerca->impostaDati('dati',$risultato);
                return $VRicerca->processaTemplate();
            }

        }

    }
?>