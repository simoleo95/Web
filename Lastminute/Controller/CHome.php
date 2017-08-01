<?php

    class CHome {
        public function impostaPagina() {
            $VHome=new VHome();
            // Da cambiare con funzione smista come bookstore
            $CRicerca=new CRicerca();
            $contenuto=$CRicerca->inScadenza();
            $VHome->impostaContenuto($contenuto);
            // Da controllare impostazione con utente registrato e utente guest
            $VHome->impostaPagina();

            $VHome->mostraContenuto();
        }
    }

?>