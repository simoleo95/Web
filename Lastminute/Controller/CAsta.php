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
                case 'profilo':
                    return $this->profilo();
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
        //Effettua le ricerche tramite il parametro inserito
        public function ricerca(){
            $VAsta= USingleton::getInstance('VAsta');
            $v=$VAsta->getesto();
            $fields=  explode(" ",$v);
            $ECatalogo=  USingleton::getInstance('ECatalogo');
            $ris=$ECatalogo->ricercafulltext($fields);
            $VRicerca=  USingleton::getInstance('VRicerca');
			$ajax=false;
			$VRicerca->impostaDati('ajax',$ajax);
            $VRicerca->impostaDati('dati',$ris);
            return $VRicerca->processaTemplate();
        }

        public function offerta() {
            // Aggiungere esclusione su offerta
            $VAsta=USingleton::getInstance('VAsta');
            $EAsta=USingleton::getInstance('EAsta');
            $asta=$EAsta->load($VAsta->getId());
            $prezzo=$asta->getPrezzoF();
			$id_asta=$VAsta->getId();
            $asta=$EAsta->load($id_asta);
			$offerta=$VAsta->getOfferta();			
			$prezzo=$asta->getPrezzoF()->getValore();
            
            //Se l'offerta e' corretta quindi maggiore del prezzo attuale
		    if($offerta>$prezzo){
				$Prezzo=$asta->getPrezzoF();
				$Prezzo->setValore($offerta);
				$FPrezzo=USingleton::getInstance('FPrezzo');				
                $FPrezzo->update($Prezzo);
				$session=USingleton::getInstance('USession');
                $EUtente=USingleton::getInstance('EUtente');
                $utente=$EUtente->load($session->leggi_valore('username'));
				$asta->setUtentevincitore($utente);
			   //variabile creatore
			   $user=USingleton::getInstance('USession');
              
				
               $EAsta->update($asta);
			   $CRegistrazione = USingleton::getInstance('CRegistrazione');
               $registrato = $CRegistrazione->getRegistrato();
			   		  
			   
			    $VAsta->setLayout('\shop_item.tpl');
                $VAsta->impostaDati('user',$registrato);				
                $VAsta->impostaDati('asta',$asta);
			    $VAsta->impostaDati('creatore',$user->leggi_valore('username'));
                $VAsta->displayTemplate();
				
			}
            //altrimenti rimani in questa pagina e mostra l'errores
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
          
        //Vai sulla pagina per i dettagli dell'asta
        public function dettagli() {
            $VAsta=USingleton::getInstance('VAsta');
            $VAsta->setLayout('\shop_item.tpl');
            $EAsta=USingleton::getInstance('EAsta');
            $asta=$EAsta->load($VAsta->getId());
            $VAsta->impostaDati('asta',$asta);
            $CRegistrazione = USingleton::getInstance('CRegistrazione');
            $registrato = $CRegistrazione->getRegistrato();
            $user=USingleton::getInstance('USession');
            $VAsta->impostaDati('creatore',$user->leggi_valore('username'));
            $VAsta->impostaDati('user',$registrato);
			

            $VAsta->displayTemplate();
        }

        //Vai sulla pagina inserisci nuovo annuncio
        public function inserisci() {
            $VAsta=USingleton::getInstance('VAsta');
            $VAsta->setLayout('\insAnnuncio.tpl');
            return $VAsta->processaTemplate();
        }

        //Vai sulla pagina profilo    
        public function profilo(){

           /* $VAsta=USingleton::getInstance('VAsta');            
            $VAsta->setLayout('\Profilo.tpl');*/
            $VMieAste=USingleton::getInstance('VMieAste');
            $VMieAste->setLayout('\Profilo.tpl');
            return $VMieAste->processaTemplate();
        }
        //Effettua la valutazione di un utente
        public function valuta(){
            $EValutazione=USingleton::getInstance('EValutazione');
            $VMieAste=USingleton::getInstance('VMieAste');
			$Eutente=USingleton::getInstance('EUtente');
			$Fvalutazione=USingleton::getInstance('FValutazione');
            $valutazione=$VMieAste->getValutazione();
            $usernameC = $VMieAste->getUsername();
            $session=USingleton::getInstance('USession');
            $usernameV=$session->leggi_valore('username');
			$uO=$Eutente->load($usernameC);
			$uR=$Eutente->load($usernameV);
			
			if($usernameC != $usernameV){

			    $EValutazione->valuta($valutazione,$uO,$uR);
			}
			$EValutazione->store($EValutazione);
			
        }
			

        public function creaAsta() {
            $VAsta=USingleton::getInstance('VAsta');

            // Creazione dell'oggetto EPrezzo
            $EPrezzo=new EPrezzo();
			$prezzofinale=new EPrezzo();
            $EPrezzo=USingleton::getInstance('EPrezzo');

            //prezzo iniziale
            $EPrezzo->setIDprezzo('');
            $EPrezzo->setValore($VAsta->getPrezzo());
            $EPrezzo->setValuta('euro');

            // prezzo finale
			$prezzofinale->setIDprezzo('');
			$prezzofinale->setValore($VAsta->getPrezzo());
            $prezzofinale->setValuta('euro');
			
			
            $EPrezzo->store($prezzofinale);
            $EPrezzo->store($EPrezzo);

            // Creazione dell'oggetto EArticolo
            $EArticolo=USingleton::getInstance('EArticolo');
            
            $EArticolo->setIDarticolo('');
            $EArticolo->setTitolo($VAsta->getTitolo());
            $EArticolo->setDescrizione($VAsta->getDescrizione());
            $EArticolo->setFoto($VAsta->getFoto());
            $EArticolo->setCategoria($VAsta->getCategoria());

            $EArticolo->store($EArticolo);

            // Creazione dell'oggetto EAsta
            $EAsta=USingleton::getInstance('EAsta');

            // Aggiungere metodo da qualche parte che fornisce l'utente attuale
            $EUtente=USingleton::getInstance('EUtente');
            $session=USingleton::getInstance('USession');
            $EUtente=$EUtente->load($session->leggi_valore('username'));

            $EAsta->setIdAsta('');
            $EAsta->setDataP(date("Y-m-d H:i:s"));
            $EAsta->setDataF($VAsta->getData());
            $EAsta->setPrezzoI($EPrezzo);
            $EAsta->setPrezzoF($prezzofinale);
            $EAsta->setUtentecreatore($EUtente);
            $EAsta->setUtentevincitore($EUtente);
            $EAsta->setArticolo($EArticolo);

            $EAsta->store($EAsta);

            echo "<script type='text/javascript'>alert('Asta inserita correttamente!');window.location = 'index.php';</script>";

        }
        public function seleziona(){
            $Vasta=  USingleton::getInstance('VAsta');
            $group=$Vasta->getGroup();            
            $ECatalogo= USingleton::getInstance('Ecatalogo');
            $ris=$ECatalogo->seleziona($group);
            $VRicerca=  USingleton::getInstance('VRicerca');
            $VRicerca->impostaDati('dati',$ris);
			$ajax=false;
			$VRicerca->impostaDati('ajax',$ajax);
            return $VRicerca->processaTemplate();
            
            
        }
    }
?>