<?php
    class EArticolo {

        // ATTRIBUTI //
        private $titolo;
        private $descrizione;
        private $foto;
        private $categoria;
       

        // costruttore a cui vengono passsati dei parametri

        // METODI //

        function getName() {
            return $this->titolo;
        }

        function getDescrizione() {
            return $this->Descrizione;
        }

        function getCategoria() {
            return $this->Categoria;
        }

        function setNme($Nme) {
            $this->Nme = $Nme;
        }

        function setDescrizione($Descrizione) {
            $this->Descrizione = $Descrizione;
        }

        function setCategoria($Categoria) {
            $this->Categoria = $Categoria;
        }

    }
?>

<?php
class Fdb{
    private $host;
    
    private $password;
    
    private $user;
    
    private $db;
    
    Private $dbname;
    
    protected $table;
    
    private $connection;
    
    protected $key;
    
    private $result;
    
    protected $result_class;
    
    function __construct() {
        $this->host = "localhost";
        $this->password = "";
        $this->dbname = "web";
        $this->user="root";
        $this->result_class='EArticolo';
    }
// permette la connessione al databse
   public function connet(){
        
              try{
                  $this->db= new PDO("mysql:host=$this->host;dbname=$this->dbname", "root", $this->password);}
 catch (PDOException $e){
     echo "ERROR". $e->getMessage();
     die();
     
 }
        
    }
    
    // permette la chiusura del database
    public function close_connection(){
        $this->db=null;
    }
    
    
    
    public function prova(){
     
        $sql=('SELECT titolo,foto,categoria,descrizione FROM articolo WHERE titolo = "automobile" ');
        $l = $this->db->query($sql);
        $l->setFetchMode(PDO::FETCH_CLASS, 'Earticolo');
        $user = $l->fetch();
        return $user;
        
    }
    
    // restituisce un oggetto dalla query
    
    public function getresult(){
        $numero_righe=$this->result->rowsCount();
        if ($numero_righe> 0)
        {
            $res=$this->result->fetchObject($this->result_class);
            $this->result=FALSE;
            return $res;
        }
        else
            return false;
        
        
    }
}
    
$f=new Fdb();
$f->connet();
$v=$f->prova();
echo var_dump($v);
echo $v->getName();

?>

