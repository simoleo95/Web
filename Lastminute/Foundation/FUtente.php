<?php
    class FUtente extends Fdb {

        function __construct() {
            parent::__construct();
            $this->result_class="EUtente";
            $this->key="username";
            $this->table="persona";
        }

        public function salva(EUtente $u){
        $query="INSERT into persona(username,nome,cognome,password,email) VALUES ('".$u->getUsername()."','".$u->getNome()."','".$u->getCognome()."','".$u->getPassword()."','".$u->getEmail()."')";
            parent::execute($query);
            return "entrato";
        }

        public function getPassword(EUtente $u){
            $utente = $FUtente->load($username);
            return $utente->password;
        }
        public function cancella($u){
            $query=" DELETE FROM persona WHERE username = '".$u."' ";
            parent::execute($query);
            return "Utente cancellato";
           
        }

    }
?>