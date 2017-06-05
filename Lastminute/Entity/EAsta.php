<?php


class EPersona{
    //ATTRIBUTI
    private $nome;
    private $cognome;
    private $email;
    private $datanascita;
   // private $luogodinacita;
    private $username;
    private $password;


    // costruttore a cui vengono passsati dei parametri
    function __construct($nome, $cognome, $email, $datanascita, $luogodinacita, $username, $password) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->datanascita = $datanascita;
        $this->luogodinacita = $luogodinacita;
        $this->username = $username;
        $this->password = $password;



    }
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
    }
?>