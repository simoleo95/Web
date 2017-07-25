<?php
	class FPrezzo extends Fdb {
		function __construct() {
            parent::__construct();
            $this->result_class="EPrezzo";
            $this->table="prezzo";
            $this->key="IDprezzo";
        }

        public function store(EPrezzo $p) {
             $query="INSERT into prezzo (IDprezzo,valore,valuta) VALUES ('','".$p->getValore()."','".$p->getValuta()."')";
             parent::execute($query);
             $b=$this->db->lastInsertId("IDprezzo");
             $p->setIDprezzo($b);
        }
	}
?>
