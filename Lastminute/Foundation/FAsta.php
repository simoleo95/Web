<?php
	class FAsta extends Fdb{
            
            public function __construct() {
                parent::__construct();
                parent::connect();
                $this->result_class("EAsta");
                $this->key="IDasta";
                $this->table="asta";
            }

            public function load($key){
                
                $asta=parent::load($key);
                $utenteV=new FUtente();
                $utenteC=new FUtente();
                $u1=$utenteC->load($asta->utenteC);
                $u2=$utenteV->load($asta->utenteV);
                $asta->setUtentevincitore($u2);
                $asta->setUtentecreatore($u1);
                $prezzoi= new FPrezzo();
                $prezzof= new FPrezzo();
                $p1= $prezzoi->load($asta->IDprezzoI);
                $p2= $prezzof->load($asta->IDprezzoF);
                $asta->setPrezzoI($p1);
                $asta->setPrezzoF($p2);
                
            }
            
            
            
            
            }

?>