<?php

class VAsta extends View{
    private $layout='\tasto_insAnnuncio.tpl';
    
     public function getTask() {
        if (isset($_REQUEST['task']))
            return $_REQUEST['task'];
        else
            return false;
    }
     public function getId() {
        if (isset($_REQUEST['id_asta']))
            return $_REQUEST['id_asta'];
        else
            return false;
    }

    public function processaTemplate() {
        global $config;
        $contenuto=$this->fetch($config['smarty']['template_dir'].$this->layout);
        return $contenuto;
    }
    
}


