<?php
	class FAsta extends Fdb {
            
        public function __construct() {
            parent::__construct();
            $this->result_class="EAsta";
            $this->key="IDasta";
            $this->table="asta";
        }

        public function load($key) {
            $asta=parent::load($key);
            $utenteV=new FUtente();
            $utenteC=new FUtente();
            $u1=$utenteC->load($asta->userC);
            $u2=$utenteV->load($asta->userV);
            $asta->setUtentevincitore($u2);
            $asta->setUtentecreatore($u1);
            $prezzoi= new FPrezzo();
            $prezzof= new FPrezzo();
            $p1= $prezzoi->load($asta->IDprezzoP);
            $p2= $prezzof->load($asta->IDprezzoF);
            $asta->setPrezzoI($p1);
            $asta->setPrezzoF($p2);
            $articolo=new FArticolo();
            $art=$articolo->load($asta->IDarticolo);
            $asta->setArticolo($art);

            return $asta;
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
            $query="INSERT into asta(IDasta,dataI,dataF,userC,userV,IDprezzoP,IDprezzoF,IDarticolo) VALUES ('','".$a->getDataP()."','".$a->getDataF()."','".$uc."','".$uv."','".$pi."','".$pf."','".$ida."')";
            parent::execute($query);
            $b=$this->db->lastInsertId("IDasta");
            $a->setIdAsta($b);
        }

        public function update(EAsta $a) {
            $user=$a->getUtentevincitore()->getUsername();

            $query='UPDATE '.$this->table.' SET userV=(
                SELECT username FROM persona WHERE username=\''.$user.'\' 
                ) WHERE '.$this->key.' = \''.$a->getIdAsta().'\'';
            return $this->execute($query);
        }
        
        
        public function ricerca($array){            
            $aste=array();
            $id=array();
            for($i=0;$i<count($array);$i++){
                if(!in_array($array[$i], $id)){
                 $query="SELECT * FROM asta WHERE IDarticolo='".$array[$i]."'";
                 $T=parent::execute($query);                 
                 $a=  parent::getObject();                           
                 $asta= $this->load($a->getIdAsta());
                 array_push($aste, $asta);}
                 array_push($id, $array[$i]);
             }
            return $aste;
        }
          
        public function seleziona($cat){
            $risultato=array();
            $query="SELECT IDasta FROM asta,articolo WHERE asta.IDarticolo=articolo.IDarticolo AND articolo.categoria='".$cat."'";
            parent::execute($query);            
            $ris=parent::getObjects();             
            for($i=0;$i<count($ris);$i++){
                $asta=$this->load($ris[$i]->getIdasta());
                array_push($risultato, $asta);                
                }
            return $risultato;
            
     }
        public function inScadenza($num){
                    $query="SELECT * FROM `asta` ORDER BY dataF ASC LIMIT 6";
        if($num != "")
          $query .= " OFFSET ".$num;
          
        parent::execute($query); 
        return parent::getObjects();
        }

        public function ricercaDiUtente($user){
            $query="SELECT * FROM Asta WHERE userc ='".$user."'";
            parent::execute($query); 
            return parent::getObjects();
        }

        public function ricercaVincitore($user){
            $query="SELECT * FROM Asta WHERE userv ='".$user."'";
            parent::execute($query); 
            return parent::getObjects();
        }
    }
?>