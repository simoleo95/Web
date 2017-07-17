<?php

	class FPrezzo extends Fdb{
		function __construct() {
                    parent::__construct();
                    parent::connect();
                    $this->result_class("EPrezzo");
                    $this->table="prezzo";
                    $this->key="IDprezzo";
                    }
	}

 ?>