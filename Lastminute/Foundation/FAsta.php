<?php
	class FAsta extends Fdb {
            
        public function __construct() {
            parent::__construct();
            $this->result_class("EAsta");
            $this->key="IDasta";
            $this->table="asta";
        }

        public function load($key) {
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
            
        public function store(EAsta $a) {
            $uc=$a->getUtentecreatore()->getUsername();

            if($a->getUtentevincitore() != NULL)
                $uv=$a->getUtentevincitore()->getUsername();
            else $uv="";

            $pi=$a->getPrezzoI()->getIDprezzo();

            if($a->getPrezzoF() != NULL)
                $pf=$a->getPrezzoF ()->getIDprezzo();
            else $pf="";

            $ida=$a->getArticolo()->getIDarticolo();
            $query="INSERT into asta(IDasta,dataI,dataF,userC,userV,IDprezzoF,IDprezzoI,IDarticolo) VALUES ('','".$a->setDataI($dataF)."','".$a->getDataF()."','".$uc."','".$uv."','".$pf."','".$pi."','".$ida."')";
            parent::execute($query);
            $b=$this->db->lastInsertId("IDasta");
            $a->setIdAsta($b);
        }
    }
?>