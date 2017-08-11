<?php

    class VHome extends View {
        private $mainContent;
        private $mainButton=array();
        private $login;
        private $logout='';

        public function impostaContenuto($contenuto) {
            $this->mainContent=$contenuto;
        }

        // Controllare impostazione utente registrato ed utente guest
        public function impostaPaginaRegistrato() {
            
            $this->assign('title', 'Last Minute');
            $this->assign('content_title', 'Benvenuto ospite');
            $this->assign('mainContent', $this->mainContent);
            $this->assign('menu', $this->mainButton);
            $this->aggiungiBottoneLogout();
            
        }
        public function impostaPaginaGuest() {
            
            $this->assign('title', 'Last Minute');
            $this->assign('content_title', 'Benvenuto ospite');
            $this->assign('mainContent', $this->mainContent);
            $this->assign('menu', $this->mainButton);
            $this->aggiungiModuloLogin();
            
        }
        

        public function mostraPagina() {
            global $config;
            $this->assign('login', $this->login);
            $this->assign('logout',$this->logout);
            $this->display($config['smarty']['template_dir'].'\home.tpl');
        }
        
         public function aggiungiModuloLogin() {
        $VRegistrazione=USingleton::getInstance('VRegistrazione');
        $VRegistrazione->setLayout('\login.tpl');        
        $modulo_login=$VRegistrazione->processaTemplate();
        $this->login.=$modulo_login;

    }
    public function aggiungiBottoneLogout(){
        $VRegistrazione=USingleton::getInstance('VRegistrazione');
        $VRegistrazione->setLayout('\tasto_logout.tpl');        
        $modulo_login=$VRegistrazione->processaTemplate();
        $this->logout.=$modulo_login;
        
    }
    }

?>