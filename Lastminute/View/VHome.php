<?php

    class VHome extends View {
        private $mainContent;
        private $mainButton=array();

        public function impostaContenuto($contenuto) {
            $this->mainContent=$contenuto;
        }

        public function impostaPaginaRegistrato() {
            $session=USingleton::getInstance('USession');
            $this->assign('title', 'Last Minute');
            $this->assign('content_title', 'Benvenuto ospite');
            $this->assign('mainContent', $this->mainContent);
            $this->assign('menu', $this->mainButton);
            $result1=$this->aggiungiBottoneLogout();
            $this->assign('logout', $result1);
            $result2=$this->aggiungiBottoneInserimentoAnnuncio();
            $this->assign('insAnnuncio', $result2);
            $result3=$this->aggiungiBottoneMieAste();
            $this->assign('insMieAste', $result3);
            $this->assign('username',$session->leggi_valore('username'));
        }

        public function impostaPaginaGuest() {
            $this->assign('title', 'Last Minute');
            $this->assign('content_title', 'Benvenuto ospite');
            $this->assign('mainContent', $this->mainContent);
            $this->assign('menu', $this->mainButton);
            $result=$this->aggiungiModuloLogin();
            $this->assign('login', $result);
        }

        public function mostraPagina() {
            global $config;
            $this->display($config['smarty']['template_dir'].'\home.tpl');
        }

        public function aggiungiModuloLogin() {
            $VRegistrazione=USingleton::getInstance('VRegistrazione');
            $VRegistrazione->setLayout('\login.tpl');

            return $VRegistrazione->processaTemplate();
        }

        public function aggiungiBottoneLogout() {
            $VRegistrazione=USingleton::getInstance('VRegistrazione');
            $VRegistrazione->setLayout('\tasto_logout.tpl');

            return $VRegistrazione->processaTemplate();
        }

        public function aggiungiBottoneInserimentoAnnuncio() {
            $VAsta=USingleton::getInstance('VAsta');
            $VAsta->setLayout('\tasto_insAnnuncio.tpl');
            return $VAsta->processaTemplate();
        }
        public function aggiungiBottoneMieAste() {
            $VAsta=USingleton::getInstance('VAsta');
            $VAsta->setLayout('\tasto_insMieAste.tpl');
            return $VAsta->processaTemplate();
        }
    }
?>