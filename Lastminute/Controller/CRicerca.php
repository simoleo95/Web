<?php

    class CRicerca {

        private $task;

        public function smista(){
            $view=USingleton::getInstance('VRicerca');
            $this->task=$view->getTask();

            switch ($this->task){
                case 'categoria':
                    return $this->categoria();
            }
        }

        public function inScadenza() {
            $ECatalogo=new ECatalogo();
            $VRicerca=USingleton::getInstance('VRicerca');

            $risultato=$ECatalogo->ricerca();
            $VRicerca->setLayout('\ricerca.tpl');
            $VRicerca->impostaDati('dati',$risultato);

            return $VRicerca->processaTemplate();
        }

        public function categoria() {
            $VRicerca=USingleton::getInstance('VRicerca');
            $FAsta=USingleton::getInstance('FAsta');
            $categoria=$VRicerca->getCategoria();
            $risultato=$FAsta->searchCategory($categoria);
            $VRicerca->setLayout('\ricerca.tpl');
            $VRicerca->impostaDati('dati',$risultato);

            return $VRicerca->processaTemplate();
        }

    }
?>