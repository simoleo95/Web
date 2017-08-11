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
      $Futente=new FUtente();
    $f=$Futente->load($u);
     if($f!=false){
         if ($p==$f->getPassword()) {
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
    }
    
    public function registra() {
        $VCreaAccount=USingleton::getInstance('VCreaAccount');        
        $VCreaAccount->setLayout('\modulo_registrazione.tpl');
        $password=$VCreaAccount->getPassword();
        $password_1=$VCreaAccount->getPassword_1();
        $username = $VCreaAccount->getUsername();
        $nome = $VCreaAccount->getNome();
        $cognome = $VCreaAccount->getCognome();
        $email = $VCreaAccount->getEmail();
        if($VCreaAccount->getAction()){
        $errore=$this->salva($username, $password, $password_1, $nome, $cognome, $email);
        echo '<script type="text/javascript">alert("'.$errore.'");</script>';
        }
        


      

        return $VCreaAccount->processaTemplate();
    }
     public function logout(){
         $USession=USingleton::getInstance('USession');
         $USession->cancella_valore('username');
     }
    
    public function salva($username, $password, $password_1, $nome, $cognome, $email){
        $EUtente = new EUtente();
        $EUtente->setNome($nome);
        $EUtente->setCognome($cognome);
        $EUtente->setEmail($email);
        $EUtente->setUsername($username);
        $EUtente->setPassword($password);
        if($password!=$password_1)
            return "password diverse";
        else{
            
        $errore = $EUtente->store();
        return $errore;
        }
    }
    


  }
    
    

