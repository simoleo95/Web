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
            $FAsta=new FAsta();
            $query="SELECT * FROM Asta";
            $FAsta->execute($query);
            $tmp=$FAsta->getObjects();

            for($i=0;$i<count($tmp);$i++) {
                $ris[]=$FAsta->load($tmp[$i]->getIdAsta());
            }

            return $ris;
        }
    }
?>