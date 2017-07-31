<?php
    require('../includes/smarty-libs');

    class View extends Smarty {
        public function __construct() {
            $this->Smarty();
            global $config;
            $this->template_dir = $config['smarty']['template_dir'];
            $this->compile_dir = $config['smarty']['compile_dir'];
            $this->config_dir = $config['smarty']['config_dir'];
            $this->cache_dir = $config['smarty']['cache_dir'];
            $this->caching = false;
        }
}
?>