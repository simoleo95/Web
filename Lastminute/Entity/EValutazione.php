<?php
    class EValutazione {

        // ATTRIBUTI //
        private $IDvalutazione;
        private $voto;
        private $utenteC;
        private $utenteV;

        // METODI //
        public function getVoto() {
            return $this->voto;
        }

        public function setVoto($voto) {
            $this->voto = $voto;
        }

        function getUtenteC() {
            return $this->utenteC;
        }

        function getUtenteV() {
            return $this->utenteV;
        }

        function setUtenteC(EUtente $utenteC) {
            $this->utenteC = $utenteC;
        }

        function setUtenteV(EUtente $utenteV) {
            $this->utenteV = $utenteV;
        }
        function getIDvalutazione() {
            return $this->IDvalutazione;
        }

        function setIDvalutazione($IDvalutazione) {
            $this->IDvalutazione = $IDvalutazione;
        }


public function Object_array(EValutazione $p){
    
    $t=get_object_vars($p);
    return $t;
}


    public function media($username){
            $FAsta=  USingleton::getInstance('FValutazione');
            $query="SELECT * FROM valutazione WHERE personaV ='".$user."'";
            $FAsta->execute($query);
            $tmp=$FAsta->getObjects();
            $somma = 10;
            for($i=0;$i<count($tmp);$i++) {
                $ris[]=$FAsta->load($tmp[$i]->getIDvalutazione());
            }
            return $ris;
    }

    public function valuta($valutazione,$usernameV,$usernameC){
        $FValutazione = new FValutazione();
        
        if($FValutazione->verificaValutazione($usernameV, $usernameC))
        return "utente gia valutato"; 
        else{
        $FValutazione->valuta($valutazione,$usernameV,$usernameC);    
        return "utete valutato";
        }
        

    }

    }
?>