<?php
/**
* 
*/
class CRegistrazione 
{

    public $username=null;

    public $password=null;

    public $errore='';

    public function Accedi($username , $password)
    {
    	$EUtente = new EUtente();
        return $EUtente->load($username, $password);
    	
    }

        public function Cancella($username , $password)
    {
        $EUtente = new EUtente();
        if($EUtente->load($username, $password)=="giusto"){
            return $EUtente->cancella($EUtente);
        }
        else return $EUtente->load($username, $password);    
       
    }

    public function Registra($nomeR,$cognomeR,$emailR,$usernameR, $passwordR){
        $EUtente = new EUtente();
        $EUtente->setNome($nomeR);
        $EUtente->setCognome($cognomeR);
        $EUtente->setEmail($emailR);
        $EUtente->setUsername($usernameR);
        $EUtente->setPassword($passwordR);
        return $EUtente->store();
        
    }

}
?>