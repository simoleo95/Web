<?php
    class FValutazione extends Fdb {

        function __construct() {
            parent::__construct();
            $this->key="IDvalutazione";
            $this->result_class="EValutazione";
            $this->table="valutazione";
        }

        public function store(EValutazione $v) {
            $uc=$v->getUtenteC()->getUsername();
            $uv=$v->getUtenteV()->getUsername();
			$voto=$v->getVoto();

			$query="SELECT valutazione FROM valutazione WHERE personaC='".$uc."' AND personaV='".$uv."'";
            $r=parent::execute($query);

            if($r->rowCount()===0) {
                $query = "INSERT into valutazione (IDvalutazione,valutazione,personaV,personaC) VALUES ('','" . $voto . "','" . $uv . "','" . $uc . "')";
                parent::execute($query);
                var_dump($query);
            }
            else {
                $query = "UPDATE valutazione SET valutazione='".$voto."' WHERE personaC='".$uc."' AND personaV='".$uv."'";
                parent::execute($query);
                var_dump($query);
            }
        }

        public function load($key) {
            $valutazione=parent::load($key);
            $utentev=new FUtente();
            $utentec=new FUtente();
            $u1 =$utentec->load($valutazione->personaC);
            $u2= $utentev->load($valutazione->personaV);
            $valutazione->setUtenteC($u1);
            $valutazione->setUtenteV($u2);
            return $valutazione;
        }

        public function update(EValutazione $a) {
            $voto=$a->getVoto();

            $query='UPDATE `'.$this->table.'` SET valore=`'.$voto.'` WHERE `'.$this->key.'` = \''.$a->getIDvalutazione().'\'';
            return $this->execute($query);
        }

        public function media($user){

            $query="SELECT * FROM valutazione WHERE personaV ='".$user."'";
            parent::execute($query);
            return parent::getObject();  
        }

        public function valuta($valutazione,$usernameV,$usernameC){

            $query="INSERT into valutazione(IDvalutazione,valutazione,personav,personac) VALUES ('','".$valutazione."','".$usernameV."','".$usernameC."')";
            parent::execute($query);
        }

        public function verificaValutazione($usernameV,$usernameC){
            $query="SELECT * FROM valutazione WHERE personaC='".$usernameC."' ";
            parent::execute($query);
            return parent::getObject();   
         }
    }
?>