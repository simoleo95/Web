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
            $this->assign('content_title', 'Benvenuto ospite');
            $this->assign('main_content', $this->mainContent);
            $this->assign('menu', $this->mainButton);
        }

        public function mostraPagina() {
            $this->display('home.tpl');
        }
    }

?>