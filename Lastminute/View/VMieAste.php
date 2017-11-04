<?php

    class VMieAste extends View{
        private $layout='\Profilo.tpl';



    public function processaTemplate() {
        global $config;

        $ECatalogo=new ECatalogo();
        $session=USingleton::getInstance('USession');
        if(!$this->getUsername()) {
            $user=$session->leggi_valore('username');
        }
        else {
            $user=$this->getUsername();
        }
        $Futente=USingleton::getInstance('FUtente');
        $Utente=$Futente->load($user);
        $asteCreate=$ECatalogo->ricercaDiUtente($user);
        $valutazione = new EValutazione();
        $asteVinte=$ECatalogo->ricercaVincitore($user);
        $this->assign('asteCreate', $asteCreate);
        $this->assign('asteVinte', $asteVinte);
        $this->assign('Utente',$Utente);
        $this->assign('creatore',$session->leggi_valore('username'));
        //$Evalutazione = new EValutazione();
        //$ris = $Evalutazione->media($user);
        //$this->assign('tuaValutazione', $ris);
        $contenuto=$this->fetch($config['smarty']['template_dir'].$this->layout);
        return $contenuto;
    }

    public function setLayout($layout) {
        $this->layout=$layout;
    }

    public function getUsername(){
        if (isset($_REQUEST['username']))
            return $_REQUEST['username'];
        else
            return false;
    }

    public function getValutazione(){
        if (isset($_REQUEST['valutazione']))
            return $_REQUEST['valutazione'];
        else
            return false;
    } 
        public function setValutazione(){
        if (isset($_POST['tuaValutazione']))
            return $_POST['tuaValutazione'];
        else
            return false;
    }

   

 }
?>