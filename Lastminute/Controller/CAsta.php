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
                case 'crea':
                    $this->creaAsta();
                case 'offerta':
                    $this->offerta();
            }
        }

        public function offerta() {
            // Aggiungere esclusione su offerta
            $VAsta=USingleton::getInstance('VAsta');
            $FAsta=USingleton::getInstance('FAsta');
            $asta=$FAsta->load($VAsta->getId());
            $prezzo=$asta->getPrezzoF();
            $result=$prezzo->setValore($VAsta->getOfferta());
            if(!$result)
                echo "<script type='text/javascript'>alert('Inserisci un prezzo maggiore di quello attuale!');</script>";
            else {
                $FPrezzo=USingleton::getInstance('FPrezzo');
                $FPrezzo->update($prezzo);
                $session=USingleton::getInstance('USession');
                $FUtente=USingleton::getInstance('FUtente');
                $utente=$FUtente->load($session->leggi_valore('username'));
                $asta->setUtentevincitore($utente);
                $FAsta->update($asta);
            }
        }

        public function dettagli() {
            $VAsta=USingleton::getInstance('VAsta');
            $VAsta->setLayout('\shop_item.tpl');
            $FAsta=USingleton::getInstance('FAsta');
            $asta=$FAsta->load($VAsta->getId());
            $VAsta->impostaDati('asta',$asta);

            return $VAsta->processaTemplate();
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
            $session=USingleton::getInstance('USession');
            $EUtente=$FUtente->load($session->leggi_valore('username'));

            $EAsta->setIdAsta('');
            $EAsta->setDataP(date("Y-m-d H:i:s"));
            $EAsta->setDataF($VAsta->getData());
            $EAsta->setPrezzoI($EPrezzo);
            $EAsta->setPrezzoF($EPrezzo);
            $EAsta->setUtentecreatore($EUtente);
            $EAsta->setUtentevincitore($EUtente);
            $EAsta->setArticolo($EArticolo);

            $FAsta->store($EAsta);

            echo "<script type='text/javascript'>alert('Asta inserita correttamente!');window.location = 'index.php';</script>";
        }
    }
?>