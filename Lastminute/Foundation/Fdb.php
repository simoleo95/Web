<?php
    class EArticolo {

        // ATTRIBUTI //
        private $titolo;
        private $descrizione;
        private $foto;
        private $categoria;
        private $IDarticolo;
        

        // costruttore a cui vengono passsati dei parametri
    
        // METODI //

        function getTitolo() {
            return $this->titolo;
    }}
?>

<?php
class Fdb{
    private $host;
    
    private $password;
    
    private $user;
    
    public $db;
    
    Private $dbname;
    
    protected $table;
    
    private $connection;
    
    protected $key;
    
    public $result;
    
    protected $result_class;
    
    function __construct() {
        $this->host = "localhost";
        $this->password = "";
        $this->dbname = "web";
        $this->user="root";
        $this->result_class='EArticolo';
        $this->key="titolo";
        $this->table="articolo";
    }
// permette la connessione al databse
   public function connect(){
        
              try{
                  $this->db= new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);}
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
       

// torna un array contenente tutti i valori di una colonna
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
    
       }
       
       $f=new Fdb();
       $f->connect();
       $s=new EArticolo("no", "c", "w", "categoria")  ;
       $query="INSERT into articolo (IDarticolo, titolo, descrizione, foto, categoria) VALUES ('','vr','vt','','d')";
       $f->execute($query);
       $id=$f->db->lastInsertId("IDarticolo"); 
       echo $id;



?>
