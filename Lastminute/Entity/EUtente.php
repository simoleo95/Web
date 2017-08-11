<?php


class EUtente extends Epersona{
    
    //ATTRIBUTI 
    // è un array
    private $listavalutazioni;

    
    // torna un puntatore all 'array di valutazioni 
	function getListavalutazioni() {
		return $this->listavalutazioni;
	}

	function setListavalutazione($r){
   		$this->listavalutazioni=$r;
    }

	public function Object_array(EUtente $p){
    	$t=  get_object_vars($p);
    return $t;
	}

	public function registra($username, $nome, $cognome, $password, $password_1){
		
		if($password_1!=$password)
			return "password diverse";
	
		$FUtente = new FUtente();
		if($FUtente->carica($username))
			return "username gia utilizzato";

		if(!$Futente->carica($username)){
			if($FUtente->salva($FUtente)=="entrato")
			return "salvato";
		}
	
	}

}
?>