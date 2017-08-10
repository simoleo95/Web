<?php
class CAsta{

    private $task;
    private $id;

    public function smista(){
        $view= USingleton::getInstance('VAsta');
        $this->task=$view->getTask();
        
        switch ($this->task){
            case 'dettagli':
                $this->dettagli();
            case 'inserisci':
                $this->inserisci();
        }
    }

    public function dettagli() {

    }

    public function inserisci() {

    }
    
}
?>

