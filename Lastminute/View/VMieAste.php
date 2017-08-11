<?php

    class VMieAste extends View{
        private $layout='\mieAste.tpl';

    public function processaTemplate() {
    global $config;

    $ECatalogo=new ECatalogo();
    $session=USingleton::getInstance('USession');
    $user=$session->leggi_valore('username');
    $asteCreate=$ECatalogo->ricercaDiUtente($user);
    $asteVinte=$ECatalogo->ricercaVincitore($user);
    $this->assign('asteCreate', $asteCreate);
    $this->assign('asteVinte', $asteVinte);
    $contenuto=$this->fetch($config['smarty']['template_dir'].$this->layout);
    return $contenuto;
        }

    public function setLayout($layout) {
        $this->layout=$layout;
        }

 }
?>