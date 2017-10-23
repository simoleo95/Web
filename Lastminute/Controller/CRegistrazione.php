<?php

    class CRegistrazione{

        private $username=null;
        private $password=null;
        private $errore='';
        private $task;

        public function smista() {
            $view=USingleton::getInstance('VRegistrazione');
            $this->task=$view->getTask();

            switch ($this->task){
                
                case 'registrazione':
                    return $this->registra();
                case 'creautente':
                    return $this->salva();
            }
        }

        public function getRegistrato(){
            $autenticato=false;
            $session= USingleton::getInstance('USession');
            $VRegistrazione= USingleton::getInstance('VRegistrazione');
            $controller=$VRegistrazione->getController();
            $this->username= $VRegistrazione->getUsername();
            $this->password=$VRegistrazione->getPassword();
            if ($session->leggi_valore('username')!=false) {
                $autenticato=true;
            }
            elseif($controller=="log"){
                   $autenticato= $this->autentica($this->username,$this->password);
            }
            if($controller=='logout'){
                $this->logout();
                $autenticato=false;
            }
            $VRegistrazione->impostaErrore($this->errore);
            $this->errore='';

            // Da impostare qui i dati da inserire nel template dopo il login
            //$VRegistrazione->impostaDati('username',$session->leggi_valore('username'));

            return $autenticato;


        }

        public function autentica($u,$p){
            $Futente=new FUtente();
            $f=$Futente->load($u);
            if($f!=false){
                if ($p==$f->getPassword()) {
                    $session=USingleton::getInstance('USession');
                    $session->imposta_valore('username',$this->username);
                    return true;
                }
                else
                    $this->errore= 'Username o password errati';
            }
            else

                $this->errore = 'L\'account non esiste';

            return false;
        }

        public function registra() {
        $VCreaAccount=USingleton::getInstance('VCreaAccount');        
        $VCreaAccount->setLayout('\modulo_registrazione.tpl');
        

        return $VCreaAccount->processaTemplate();
    }
     public function logout(){
         $USession=USingleton::getInstance('USession');
         $USession->cancella_valore('username'); 
     }
    //Usato per la registrazione dell'utente
    public function salva(){

        
        $VCreaAccount=USingleton::getInstance('VCreaAccount');  
        $password=$VCreaAccount->getPassword();
        $password_1=$VCreaAccount->getPassword_1();
        $EUtente = new EUtente();
        $EUtente->setNome($VCreaAccount->getNome());
        $EUtente->setCognome($VCreaAccount->getCognome());
        $EUtente->setEmail($VCreaAccount->getEmail());
        $EUtente->setUsername($VCreaAccount->getUsername());
        $EUtente->setPassword($password);
       $errore = $EUtente->store();

        if ($errore == 'Utente creato correttamente') {
         header('Location:home');   
        }
        else{
         header('Location:Registrazione');
        
        }
    }
    


  }
    
    