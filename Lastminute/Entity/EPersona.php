<?php


class EPersona{
    //ATTRIBUTI
    protected $nome;
    protected $cognome;
    protected $email;
    protected $username;
    protected $password;
    
     
    
    //METODI
    function getNome() {
        return $this->nome;
    }

    function getCognome() {
        return $this->cognome;
    }

    function getEmail() {
        return $this->email;
    }

    function getDatanascita() {
        return $this->datanascita;
    }

    function getLuogodinacita() {
        return $this->luogodinacita;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDatanascita($datanascita) {
        $this->datanascita = $datanascita;
    }

  /* function setLuogodinacita($luogodinacita) {
  /    $this->luogodinacita = $luogodinacita;
    }*/

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    
        }
    function store(){
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

    public function load($id){

        $FUtente=USingleton::getInstance('FUtente');
        $appoggio=$FUtente->carica($id);
        return $appoggio;
   
    }    
    }













?>