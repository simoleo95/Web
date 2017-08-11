<?php

class VCreaAccount extends View{
private $layout='\modulo_registrazione.tpl';


    public function getController() {
        if (isset($_REQUEST['controller']))
            return $_REQUEST['controller'];
        else
            return false;
 }
        
 
    public function getPassword() {
        if (isset($_REQUEST['password']))
            return $_REQUEST['password'];
        else
            return false;
    }

    public function getPassword_1() {
        if (isset($_REQUEST['password_1']))
            return $_REQUEST['password_1'];
        else
            return false;
    }
   
    public function getUsername() {
        if (isset($_REQUEST['username']))
            return $_REQUEST['username'];
        else
            return false;
    }

        public function getNome() {
        if (isset($_REQUEST['nome']))
            return $_REQUEST['nome'];
        else
            return false;
    }

        public function getCognome() {
        if (isset($_REQUEST['cognome']))
            return $_REQUEST['cognome'];
        else
            return false;
    }

        public function getEmail() {
        if (isset($_REQUEST['email']))
            return $_REQUEST['email'];
        else
            return false;
    }

     public function getAction(){
               if (isset($_REQUEST['registra']))
                return true;
 }    

    public function processaTemplate() {
        global $config;
        $contenuto=$this->fetch($config['smarty']['template_dir'].$this->layout);
        return $contenuto;
    }

    public function setLayout($tlp) {
        $this->layout=$tlp;
                 
    }
}
 ?>