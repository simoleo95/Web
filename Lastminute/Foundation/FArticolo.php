<?php
    class FArticolo extends Fdb {

        function __construct() {
            parent::__construct();
            $this->key="IDarticolo";
            $this->result_class="EArticolo";
            $this->table="articolo";
        }
    
        public function store(EArticolo $a) {
            $query="INSERT into articolo (IDarticolo,titolo,descrizione,foto,categoria) VALUES ('','".$a->getTitolo()."','".$a->getDescrizione()."','".$a->getFoto()."','".$a->getCategoria()."')";
            parent::execute($query);
            $b=$this->db->lastInsertId("IDarticolo");
            $a->setIDarticolo($b);
        }
        
        public function ricercafull($array){
            $FAsta=  USingleton::getInstance('FAsta');
            $risultati=array();
            $aste=array();
            for($i=0;$i<count($array);$i++){
                $query="SELECT IDarticolo, MATCH (`titolo`,`descrizione`) 
                 AGAINST ('".$array[$i]."') AS new_tb
                 FROM articolo 
                 WHERE MATCH (`titolo`,`descrizione`) 
                 AGAINST ('".$array[$i]."')
                 ORDER BY new_tb DESC";
                parent::execute($query);                
                $risultati=array_merge($risultati,  parent::getresult());
                
            }
             $aste=$FAsta->ricerca($risultati);
             return $aste;
        }
        
        
    }
?>