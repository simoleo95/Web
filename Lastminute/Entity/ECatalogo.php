<?php

    class ECatalogo {
        private $catalogoAste=array();

        public function getCatalogoAste() {
            return $this->catalogoAste;
        }

        public function addAsta(EAsta $a) {
            $this->catalogoAste[]=$a;
        }

        public function ricerca() {
            // Da cambiare
            $FAsta=  USingleton::getInstance('FAsta');
            $query="SELECT * FROM Asta";
            $FAsta->execute($query);
            $tmp=$FAsta->getObjects();

            for($i=0;$i<count($tmp);$i++) {
                $ris[]=$FAsta->load($tmp[$i]->getIdAsta());
            }

            return $ris;
        }

       public function ricercaDiUtente($user){
            $FAsta=  USingleton::getInstance('FAsta');
            $query="SELECT * FROM Asta WHERE userc ='".$user."'";
            $FAsta->execute($query);
            $tmp=$FAsta->getObjects();

            for($i=0;$i<count($tmp);$i++) {
                $ris[]=$FAsta->load($tmp[$i]->getIdAsta());
            }

            return $ris;
       } 
       public function ricercaVincitore($user){
            $FAsta=  USingleton::getInstance('FAsta');
            $query="SELECT * FROM Asta WHERE userv ='".$user."'";
            $FAsta->execute($query);
            $tmp=$FAsta->getObjects();

            for($i=0;$i<count($tmp);$i++) {
                $ris[]=$FAsta->load($tmp[$i]->getIdAsta());
            }

            return $ris;
       } 
       
       public function ricercafulltext($v){
           $FArticolo=USingleton::getInstance('FArticolo');
           $FAsta=  USingleton::getInstance('FAsta');
           $ris=$FArticolo->ricercafull($v);
           return $ris;
           
           }
           
           
           
       }
    
?>