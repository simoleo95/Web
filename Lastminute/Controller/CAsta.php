<?php

    class CAsta{

        private $task;
        private $id;

        public function smista(){
            $view=USingleton::getInstance('VAsta');
            $this->task=$view->getTask();

            switch ($this->task){
                case 'dettagli':
                    return $this->dettagli();
                case 'inserisci':
                    return $this->inserisci();
                case 'crea';
                    $this->creaAsta();
            }
        }

        public function dettagli() {

        }

        public function inserisci() {
            $VAsta=USingleton::getInstance('VAsta');
            $VAsta->setLayout('\insAnnuncio.tpl');
            return $VAsta->processaTemplate();
        }

        public function creaAsta() {
            $VAsta=USingleton::getInstance('VAsta');

            // Creazione dell'oggetto EPrezzo
            $EPrezzo=USingleton::getInstance('EPrezzo');
            $FPrezzo=USingleton::getInstance('FPrezzo');

            $EPrezzo->setIDprezzo('');
            $EPrezzo->setValore($VAsta->getPrezzo());
            $EPrezzo->setValuta('euro');

            $FPrezzo->store($EPrezzo);

            // Creazione dell'oggetto EArticolo
            $EArticolo=USingleton::getInstance('EArticolo');
            $FArticolo=USingleton::getInstance('FArticolo');

            $EArticolo->setIDarticolo('');
            $EArticolo->setTitolo($VAsta->getTitolo());
            $EArticolo->setDescrizione($VAsta->getDescrizione());
            $EArticolo->setFoto($VAsta->getFoto());
            $EArticolo->setCategoria($VAsta->getCategoria());

            $FArticolo->store($EArticolo);

            // Creazione dell'oggetto EAsta
            $EAsta=USingleton::getInstance('EAsta');
            $FAsta=USingleton::getInstance('FAsta');

            // Aggiungere metodo da qualche parte che fornisce l'utente attuale
            $EUtente=USingleton::getInstance('EUtente');
            $FUtente=USingleton::getInstance('FUtente');
            $EUtente=$FUtente->load('andrecocc');

            $EAsta->setIdAsta('');
            $EAsta->setDataP(date("Y-m-d H:i:s"));
            $EAsta->setDataF($VAsta->getData());
            $EAsta->setPrezzoI($EPrezzo);
            $EAsta->setPrezzoF($EPrezzo);
            $EAsta->setUtentecreatore($EUtente);
            $EAsta->setUtentevincitore($EUtente);
            $EAsta->setArticolo($EArticolo);

            $FAsta->store($EAsta);
        }
    }
?>

