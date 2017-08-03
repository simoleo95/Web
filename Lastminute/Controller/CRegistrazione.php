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
    	$FUtente = new FUtente();
    	$this->username = $username;
    	$this->password = $password;
    	if ($username AND $password){
    		if( $FUtente->load($username) ){
    			//esiste
    			$utente = $FUtente->load($username);
    			if ($password == $utente->getPassword($utente) )
    				return "giusto";
    			if ($password !== $utente->getPassword($utente)) 
    				return "sbagliato";
    		}

    		if(!$FUtente->load($username))
    			return "non esiste";
    	}
    	else return "vuoto";
    }

}
?>