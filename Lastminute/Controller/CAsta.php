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
                case 'mieAste':
                    return $this->mieAste();
                case 'crea':
                    $this->creaAsta();
                case 'offerta':
                   return $this->offerta();
                case 'valuta':
                   return $this->valuta();  
                case 'ricerca':
                    return $this->ricerca();
                case 'seleziona':
                    return $this->seleziona();
            }
        }
        public function ricerca(){
            $VAsta= USingleton::getInstance('VAsta');
            $v=$VAsta->getesto();
            $fields=  explode(" ",$v);
            $ECatalogo=  USingleton::getInstance('ECatalogo');
            $ris=$ECatalogo->ricercafulltext($fields);
            $VRicerca=  USingleton::getInstance('VRicerca');
            $VRicerca->impostaDati('dati',$ris);
            return $VRicerca->processaTemplate();
        }

        public function offerta() {
            // Aggiungere esclusione su offerta
            $VAsta=USingleton::getInstance('VAsta');
            $FAsta=USingleton::getInstance('FAsta');
            $asta=$FAsta->load($VAsta->getId());
            $prezzo=$asta->getPrezzoF();
			$id_asta=$VAsta->getId();
            $asta=$FAsta->load($id_asta);
			$offerta=$VAsta->getOfferta();			
			$prezzo=$asta->getPrezzoF()->getValore();			
		   if($offerta>$prezzo){
				$Prezzo=$asta->getPrezzoF();
				$Prezzo->setValore($offerta);
				$FPrezzo=USingleton::getInstance('FPrezzo');				
                $FPrezzo->update($Prezzo);
				$session=USingleton::getInstance('USession');
                $FUtente=USingleton::getInstance('FUtente');
                $utente=$FUtente->load($session->leggi_valore('username'));
				$asta->setUtentevincitore($utente);  
				
                $FAsta->update($asta);
			   $CRegistrazione = USingleton::getInstance('CRegistrazione');
               $registrato = $CRegistrazione->getRegistrato();
			   $VAsta->setLayout('\shop_item.tpl');
                $VAsta->impostaDati('user',$registrato);				
                $VAsta->impostaDati('asta',$asta);
                $VAsta->displayTemplate();
				
			}
			else {
				$errore="<script type='text/javascript'>alert('Inserisci un prezzo maggiore di quello attuale!');</script>";;
				$VAsta->setLayout('\shop_item.tpl');
				$CRegistrazione = USingleton::getInstance('CRegistrazione');
                $registrato = $CRegistrazione->getRegistrato();
                $VAsta->impostaDati('user',$registrato); 				
                $VAsta->impostaDati('asta',$asta);
				$VAsta->impostaDati('errore',$errore);
                $VAsta->displayTemplate();
			}
		}
          

        public function dettagli() {
            $VAsta=USingleton::getInstance('VAsta');
            $VAsta->setLayout('\shop_item.tpl');
            $FAsta=USingleton::getInstance('FAsta');
            $asta=$FAsta->load($VAsta->getId());
            $VAsta->impostaDati('asta',$asta);
            $CRegistrazione = USingleton::getInstance('CRegistrazione');
            $registrato = $CRegistrazione->getRegistrato();
            $VAsta->impostaDati('user',$registrato);
			

            $VAsta->displayTemplate();
        }

        public function inserisci() {
            $VAsta=USingleton::getInstance('VAsta');
            $VAsta->setLayout('\insAnnuncio.tpl');
            return $VAsta->processaTemplate();
        }

        public function mieAste(){

            $VAsta=USingleton::getInstance('VAsta');

            
            $VAsta->setLayout('\Profilo.tpl');
            $VMieAste=USingleton::getInstance('VMieAste');
            $VMieAste->setLayout('\Profilo.tpl');
            return $VMieAste->processaTemplate();
        }

        public function valuta(){
            $VMieAste=USingleton::getInstance('VMieAste');
            $valutazione=$VMieAste->getValutazione();
            $usernameC = $VMieAste->getUsername();
            $session=USingleton::getInstance('USession');
            $usernameV=$session->leggi_valore('username');
            $EValutazione = new EValutazione();
            $errore=$EValutazione->valuta($valutazione,$usernameV,$usernameC);
            //header('Location: index.php?controller=asta&task=mieAste');
            echo "<script type='text/javascript'>alert('".$errore."');window.location = 'index.php?controller=asta&task=mieAste';</script>";
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
        public function seleziona(){
            $Vasta=  USingleton::getInstance('VAsta');
            $group=$Vasta->getGroup();            
            $ECatalogo= USingleton::getInstance('Ecatalogo');
            $ris=$ECatalogo->seleziona($group);
            $VRicerca=  USingleton::getInstance('VRicerca');
            $VRicerca->impostaDati('dati',$ris);
            return $VRicerca->processaTemplate();
            
            
        }
    }
?>