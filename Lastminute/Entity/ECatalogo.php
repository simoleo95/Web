<?php
  
  class ECatalogo {
    
      private $catalogoAste=array();

      public function getCatalogoAste() {
        return $this->catalogoAste;
        }

      public function addAsta(EAsta $a) {
        $this->catalogoAste[]=$a;
      }

      //Seleziona le aste in scadenza
      public function inScadenza($num) {
        $FAsta=  USingleton::getInstance('FAsta');
        $tmp= $FAsta->inScadenza($num);
 
        if($tmp != false){
          for($i=0;$i<count($tmp);$i++) {
            $ris[]=$FAsta->load($tmp[$i]->getIdAsta());
          }
			    return $ris;
        }
			
        else{
          return $ris=null;
        }
      }

      public function ricercaDiUtente($user){
        $FAsta=  USingleton::getInstance('FAsta');
        $tmp=$FAsta->ricercaDiUtente($user);


        if($tmp != null){
		      for($i=0;$i<count($tmp);$i++) {
            $ris[]=$FAsta->load($tmp[$i]->getIdAsta());
            }
		      return $ris;
		    }
		    else
			   return $ris= null;
      } 
       
      public function ricercaVincitore($user){
        $FAsta = USingleton::getInstance('FAsta');
        $tmp = $FAsta->ricercaVincitore($user);
		   
		    if ( $tmp != null){
		      for($i=0;$i<count($tmp);$i++) {
            $ris[]=$FAsta->load($tmp[$i]->getIdAsta());
          }
		      return $ris;
		    }
		    else
			   return $ris= null;
		  } 
       
      public function ricercafulltext($v){
        $FArticolo=USingleton::getInstance('FArticolo');
        $FAsta=  USingleton::getInstance('FAsta');
        $ris=$FArticolo->ricercafull($v);
        return $ris;
      }
          
      public function seleziona($r){
        $FAsta=  USingleton::getInstance('FAsta');
        $ris=$FAsta->seleziona($r);
        return $ris;
      }
           
           
}
    
?>