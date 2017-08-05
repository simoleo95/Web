<?php

    class VHome extends View {
        private $mainContent;
        private $mainButton=array();



        public function impostaContenuto($contenuto) {
            $this->mainContent=$contenuto;

        }
        // Controllare impostazione utente registrato ed utente guest
        public function impostaPagina() {
            $this->assign('title', 'Last Minute');
            
            $this->assign("errore", "non ancora entrato");
            $this->assign("erroreR", "non ancora registrato");
            $this->assign("erroreC", "non ancora cancellato");

            $this->assign('displayR', 'none');
            $this->assign('displayC', 'none');
            $this->assign('displayL', 'block');

            $this->assign('colorP', 'white');
            $this->assign('coloreU', 'white');

            //verifico che l'utente voglia entrare

           if (isset($_REQUEST['entra'])) {
                $username = $this->getUsername();
                $password = $this->getPassword();
                $CRegistrazione = new CRegistrazione();
                $errore = $CRegistrazione->Accedi($username, $password);
                $this->assign('errore', $errore);
                if($errore=="l'utente non esiste")
                    $this->assign('coloreU', '#e9967a');  
                if($errore=="password errata")
                    $this->assign('coloreP', '#e9967a');                    
                if($errore == "giusto")
                    $this->assign('title', $username);
             } 

                if (isset($_REQUEST['cancella'])) {
                $username = $this->getUsername();
                $password = $this->getPassword();
                $CRegistrazione = new CRegistrazione();
                $errore = $CRegistrazione->Cancella($username, $password);
                $this->assign('errore', $errore);
                if($errore=="l'utente non esiste")
                    $this->assign('coloreU', '#e9967a');  
                if($errore=="password errata")
                    $this->assign('coloreP', '#e9967a');                    
                if($errore == "giusto")
                $this->assign("cancellato");

             } 


            //verifico che l'untente voglia registrarsi
            if (isset($_REQUEST['registra'])) {
                $this->assign('displayL', 'none');
                $usernameR = $this->getUsernameR();
                $passwordR = $this->getPasswordR();
                $nomeR = $this->getNomeR();
                $cognomeR = $this->getCognomeR(); 
                $emailR = $this->getEmailR();
                          
                $CRegistrazione = new CRegistrazione();
                $erroreR = $CRegistrazione->Registra($nomeR,$cognomeR,$emailR,$usernameR, $passwordR);

                if($erroreR == "entrato"){
                    $this->assign('title', $usernameR);
                    $this->assign('displayR', 'none');
                    $this->assign('displayC', 'none');
                    $this->assign('displayL', 'block');
                    $this->assign("errore", "registrazione avvenuta");  
                }
                if($erroreR == "Utente gia un uso"){
                    $this->assign('coloreU', '#e9967a');
                    $this->assign('displayR', 'block'); 
                    $this->assign('erroreR', $erroreR); 

                }
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

        public function getPasswordR() {
            if (isset($_REQUEST['passwordR']))
                return $_REQUEST['passwordR'];
            else
                return false;
    }

        public function getUsername() {
            if (isset($_REQUEST['username']))
                return $_REQUEST['username'];
            else
                return false;
    }
        public function getUsernameR() {
            if (isset($_REQUEST['usernameR']))
                return $_REQUEST['usernameR'];
            else
                return false;
    }

        public function getNomeR() {
            if (isset($_REQUEST['nomeR']))
                return $_REQUEST['nomeR'];
            else
                return false;
    }

            public function getCognomeR() {
            if (isset($_REQUEST['cognomeR']))
                return $_REQUEST['cognomeR'];
            else
                return false;
    }

            public function getEmailR() {
            if (isset($_REQUEST['emailR']))
                return $_REQUEST['emailR'];
            else
                return false;
    }

        public function impostaErrore($errore){
            $this->assign('errore',$errore);
    }
    }

?>