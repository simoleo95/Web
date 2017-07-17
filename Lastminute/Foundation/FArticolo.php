<?php


class FArticolo extends Fdb{
    
    function __construct() {
        parent::__construct();
        parent::connect();
        $this->key="IDarticolo";
        $this->result_class="EArticolo";
        $this->table="articolo";        
    }
    
   
       
       
       
       
       
   

    
    
    
    
}





?>
