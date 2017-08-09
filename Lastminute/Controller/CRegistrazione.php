<?php

class CRegistrazione{
    
    private $username=null;
    
    private $password=null;
    
    private $errore='';
    
    
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
           return $autenticato;
    
    
    }
  
    public function autentica($u,$p){
        $EUtente=USingleton::getInstance('EUtente');
        $autenticato=$Eutente->autentica($u,$p);
        switch ($autenticato){
            case '0':
                $session=  USingleton::getInstance('USession');
                $session->imposta_valore('username',$this->username);
                return true;
            case '1':
                $this->errore= 'Username o password errati';
                 return false;
            case '2':
                $this->errore = 'L\'account non esiste';
                return false;
        }
    }
    /*  $Futente=new FUtente();
    //$f=$Futente->load($u);
     //if($f!=false){
       //  if ($p==$f->getPassword()) {
             $session=USingleton::getInstance('USession');
                    $session->imposta_valore('username',$this->username);                                                                  
                    return true;
         }
        else {
                     $this->errore= 'Username o password errati';
                    //username password errati
                }
     }else {
            $this->errore = 'L\'account non esiste';
            //account non esiste
        }
        return false;
    }*/
    
    public function registra() {
        $VRegistrazione=USingleton::getInstance('VRegistrazione');        
        $VRegistrazione->setLayout('\modulo_registrazione.tpl');
        return $VRegistrazione->processaTemplate();
    }
     public function logout(){
         $USession=USingleton::getInstance('USession');
         $USession->cancella_valore('username');
     }
    
    
  }
    
    

