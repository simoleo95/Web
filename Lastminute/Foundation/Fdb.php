<?php
class Fdb{
    
    
    protected $db;
    
    protected $table;
    
    protected $key;
    
    public $result;
    
    protected $result_class;
    
    protected $autoincrement;
    
            function __construct() {
        global $config;
        $this->connect($config['mysql']['dbms'], $config['mysql']['dbname'], $config['mysql']['host'], $config['mysql']['password']);
    }
// permette la connessione al databse
   public function connect($host,$dbname,$user,$password){
        
              try{
                  $this->db= new PDO("mysql:host=$host;dbname=$dbname", $user, $password);}
                  catch (PDOException $e){
                     echo "ERROR". $e->getMessage();
                     die();
     
 }
        
    }
    
    // permette la chiusura del database
    public function close_connection(){
        $this->db=null;
    }
    
    
    // restituisce un oggetto dalla query
         public function getObject(){
        
        $numero_colonne=$this->result->columnCount();
        if ($numero_colonne ==0)
            return  $this->result=false;
        else{
            $res= $this->result->fetchObject($this->result_class);
            return $res;
        }
     }
            
            // ritorna un array di oggetti
       public function getObjects(){
            
            $numero_colonne=$this->result->columnCount();
        if ($numero_colonne ==0)
            return  $this->result=false;
        else{
           while($user= $this->result->fetchObject($this->result_class)){
            $users[]=$user;
              }
              return $users;
           }
       }
           // esegue una query e restituisce un oggetto 
       // non funziona su tabelle che hanno chiavi esterne
       public function load($key){
          $query='SELECT * ' .
                'FROM `'.$this->table.'` ' .
                'WHERE `'.$this->key.'` = \''.$key.'\'';
           $this->result=$this->db->query($query);
           return $this->getObject();
       }
       

//      // torna un array contenente tutti i valori di una colonna
       // serve per eventuali ricerche 
           public function getresult(){
               $numero_colonne=$this->result->columnCount();
               if($numero_colonne != 0){
                   $result=$this->result->fetchAll(PDO::FETCH_COLUMN);
                   $this->result=false;
                   return $result;
               }
               else return false;
           }
           
           
           //funzione vhe esegue una query
           public function execute($query){
           $this->result=$this->db->query($query);
           return $this->result;
           
           }
    public function store($object){
        $t=$object->Object_array($object);
                $i=0;
        $values='';
        $fields='';
        foreach ($object as $key=>$value) {
                if ($i==0) {
                    $fields.='`'.$key.'`';
                    $values.='\''.$value.'\'';
                } else {
                    $fields.=', `'.$key.'`';
                    $values.=', \''.$value.'\'';
                }
                $i++;
            
        }
        $query='INSERT INTO '.$this->_table.' ('.$fields.') VALUES ('.$values.')';
        $return = $this->execute($query);
        if ($this->auto_increment) {
            $b=$this->db->lastInsertId("IDvalutazione");
            return $b;
        } 
        else 
            return $return;
        
         }
         
         public function delete(& $object) {
        $t=$object->Object_array();
        $query='DELETE ' .
                'FROM `'.$this->_table.'` ' .
                'WHERE `'.$this->_key.'` = \''.$t[$this->_key].'\'';
        unset($object);
        return $this->execute($query);
    }
         
         
         
         
         
         
         
         
         
       }
      


?>
