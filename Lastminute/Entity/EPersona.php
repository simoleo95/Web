<?php


class EPersona{
    //ATTRIBUTI
    protected $nome;
    protected $cognome;
    protected $email;
    protected $username;
    protected $password;
    
     
    
    //METODI

    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function getEmail() {
        return $this->email;
    }


    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    
        }

    public function store(){
        $appoggio = new EUtente();
        $appoggio->setNome($this->nome);
        $appoggio->setCognome($this->cognome);
        $appoggio->setEmail($this->email);
        $appoggio->setUsername($this->username);
        $appoggio->setPassword($this->password);
        $FUtente = new FUtente();
        if($FUtente->load($this->username))
            return "Utente gia un uso";
        else
        return $FUtente->salva($appoggio);

    }   

    public function load($username, $password){
        $FUtente = new FUtente();
            if( $FUtente->load($username) ){
                $utente = $FUtente->load($username);
                if ($password == $utente->getPassword($utente) )
                    return "l'utente e' entrato";
                if ($password !== $utente->getPassword($utente)) 
                    return "password errata";
            }

            if(!$FUtente->load($username))
                return "l'utente non esiste";

    }

        public function cancella($username){
            $FUtente = new FUtente();       
            return $FUtente->cancella($username);
                    
        }

}

?>