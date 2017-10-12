<?php

    class VMieAste extends View{
        private $layout='\Profilo.tpl';

    public function processaTemplate() {
    global $config;

    $ECatalogo=new ECatalogo();
    $session=USingleton::getInstance('USession');
    $user=$session->leggi_valore('username');
    $Futente=USingleton::getInstance('FUtente');
	$Utente=$Futente->load($user);
    $asteCreate=$ECatalogo->ricercaDiUtente($user);
    $valutazione = new EValutazione();
    $asteVinte=$ECatalogo->ricercaVincitore($user);
    $this->assign('asteCreate', $asteCreate);
    $this->assign('asteVinte', $asteVinte);
	$this->assign('Utente',$Utente);	
    //$Evalutazione = new EValutazione();
    //$ris = $Evalutazione->media($user);
    //$this->assign('tuaValutazione', $ris);
    $contenuto=$this->fetch($config['smarty']['template_dir'].$this->layout);
    return $contenuto;
        }

    public function setLayout($layout) {
        $this->layout=$layout;
        }

    public function getValutazione(){
        if (isset($_POST['valutazione']))
            return $_POST['valutazione'];
        else
            return false;
    } 
        public function setValutazione(){
        if (isset($_POST['tuaValutazione']))
            return $_POST['tuaValutazione'];
        else
            return false;
    } 

        public function getUsername(){
        if (isset($_POST['username']))
            return $_POST['username'];
        else
            return false;
    }  

   

 }
?>