<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EAmministratore extends EPersona{
    
    function _construct(){
        parent::construct;
        

        
    }
    
    
    
public function Object_array(EAmministratore $p){
    
    $t=  get_object_vars($p);
    return $t;
}
    
    
}









?>
