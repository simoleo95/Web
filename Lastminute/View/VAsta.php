<?php

class VAsta extends View{
    private $layout='\dettagli_asta.tpl';
    
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
    
}


