<?php

    class CHome {

        private $ajax;

        public function impostaPagina() {
            $VAsta = USingleton::getInstance('VAsta');
            $ajax = $VAsta->getAjax();

            if($ajax) {
                $this->smista();
            }
            else {
                $CRegistrazione = USingleton::getInstance('CRegistrazione');
                $registrato = $CRegistrazione->getRegistrato();
                $VHome = new VHome();
                // Da cambiare con funzione smista come bookstore
                $contenuto = $this->smista();
                $VHome->impostaContenuto($contenuto);
                // Da controllare impostazione con utente registrato e utente guest
                if ($registrato)
                    $VHome->impostaPaginaRegistrato();
                else
                    $VHome->impostaPaginaGuest();

                $VHome->mostraPagina();
            }
        }

        public function smista() {
            $view = USingleton::getInstance('VRegistrazione');
            switch ($view->getController()) {
                case 'registra':
                    $CRegistrazione = USingleton::getInstance('CRegistrazione');
                    return $CRegistrazione->smista();
                case 'asta':
                    $CAsta = USingleton::getInstance('CAsta');
                    return $CAsta->smista();
                case 'categoria':
                    $CAsta= USingleton::getInstance('CAsta');
                    return $CAsta->smista();
                default:
                    $CRicerca = USingleton::getInstance('CRicerca');
                    return $CRicerca->inScadenza();
            }
        }
    }
?>