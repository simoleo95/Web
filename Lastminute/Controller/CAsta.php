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
        }
        
        
    }
public function dettagli(){
    
    
    
}
    
}
?>

