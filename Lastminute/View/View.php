<?php
    require('C:\xampp\htdocs\Web\Lastminute\includes\smarty-libs\Smarty.class.php');

    class View extends Smarty {
        public function __construct() {
            parent::__construct();
            global $config;
            $this->template_dir = $config['smarty']['template_dir'];
            $this->compile_dir = $config['smarty']['compile_dir'];
            $this->config_dir = $config['smarty']['config_dir'];
            $this->cache_dir = $config['smarty']['cache_dir'];
            $this->caching = false;
        }

        public function impostaDati($key,$valore) {
            $this->assign($key,$valore);
        }

        public function getController() {
            if (isset($_REQUEST['controller']))
                return $_REQUEST['controller'];
            else
                return false;
        }
}
?>