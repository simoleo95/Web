<?php
    class FUtente extends Fdb {

        function __construct() {
            parent::__construct();
            $this->result_class="EUtente";
            $this->key="username";
            $this->table="persona";
        }

        public function load($key){
            $utente=parent::load($key);
            /*$Fvalutazione= new FListaValutazione();
            $f=$Fvalutazione->loadvalutazioni($utente->getUsername());
            $utente->setListavalutazione($f);*/

            return $utente;
        }

        public function salva(EUtente $u){
        $query="INSERT into persona(username,nome,cognome,password,email) VALUES ('".$u->getUsername()."','".$u->getNome()."','".$u->getCognome()."','".$u->getPassword()."','".$u->getEmail()."')";
            parent::execute($query);
            return 'Utente creato correttamente';
        }

        public function carica($ID){
            $query ="SELECT * FROM utente WHERE username = '".$ID."' ";
            parent::execute($query);
            return parent::getObject();
        }
    }
?>