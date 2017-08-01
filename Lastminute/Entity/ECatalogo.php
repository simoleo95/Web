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
            $FAsta=new FAsta();
            $query="SELECT * FROM Asta";
            $FAsta->execute($query);
            $ris=$FAsta->getObjects();

            for($i=0;$i<count($ris);$i++) {
                $ris2[]=$FAsta->load($ris[$i]['idAsta']);
            }

            return $ris2;
        }
    }
?>