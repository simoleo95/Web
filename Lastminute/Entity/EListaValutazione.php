<?php
    class EListaValutazione {

        // ATTRIBUTI //
        private $media;
        private $listaVal = array();

        // METODI //
        public function getMedia() {
            return $this->media;
        }

        public function setMedia($media) {
            $this->media = $media;
        }

        public function addArrayElement(EValutazione $val) {
            array_push($this->listaVal, $val);
        }
        
        public function createmedia(){
            $i=0;
            $media=0;
            foreach ($this->listaVal as $v) {
                $media+=$v->getVoto();
                $i++;
    
}
            
         $media=$media/$i;
         return $media;
            
            
        }
        
        
        
    }
    
?>