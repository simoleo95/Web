<?php

    class VHome extends View {
        private $mainContent;
        private $mainButton=array();



        public function impostaContenuto($contenuto) {
            $this->mainContent=$contenuto;

        }
        // Controllare impostazione utente registrato ed utente guest
        public function impostaPagina() {
            $this->assign("errore", "non ancora entrato");
            $this->assign('title', 'Last Minute');
           if (isset($_REQUEST['entra'])) {
                $username = $this->getUsername();
                $password = $this->getPassword();
                $CRegistrazione = new CRegistrazione();
                $errore = $CRegistrazione->Accedi($username, $password);
                $this->assign('errore', $errore);
                if($errore == "giusto")
                    $this->assign('title', $username);
            } 
            
            $this->assign('content_title', 'Benvenuto ospite');
            $this->assign('mainContent', $this->mainContent);
            $this->assign('menu', $this->mainButton);

        }

        public function mostraPagina() {
            $this->display('C:\xampp\htdocs\Lastminute\templates\templates\home.tpl');
        }

        public function getPassword() {
            if (isset($_REQUEST['password']))
                return $_REQUEST['password'];
            else
                return false;
    }

        public function getUsername() {
            if (isset($_REQUEST['username']))
                return $_REQUEST['username'];
            else
                return false;
    }
        public function impostaErrore($errore){
            $this->assign('errore',$errore);
    }
    }

?>