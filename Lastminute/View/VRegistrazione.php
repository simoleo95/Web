<?php

class VRegistrazione extends View{
private $layout='\login.tpl';


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
   
    public function getUsername() {
        if (isset($_REQUEST['username']))
            return $_REQUEST['username'];
        else
            return false;
    }
     public function processaTemplate() {
        global $config;
        $contenuto=$this->fetch($config['smarty']['template_dir'].$this->layout);
        return $contenuto;
    }
  public function impostaErrore($errore){
        $this->assign('errore',$errore);
    }
    public function setLayout($tlp) {
        $this->layout=$tlp;
                 
    }

    public function impostaDati($user) {
        $this->assign('username',$user);
    }
}
 ?>