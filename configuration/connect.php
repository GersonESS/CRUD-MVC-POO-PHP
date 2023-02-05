
    
    <?php
    define('HOST', 'localhost');
    define('DBNAME', 'cadastro');
    define('USER', 'root');
    define('PASSWORD', 'gabibi89');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        private function connectDatabase(){
            try 
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
            } 
            catch (PDOException $e) 
            {
                echo "Error na conecção com Database!".$e->getMessage();
                die();
            }
        } 

    }

   
?>