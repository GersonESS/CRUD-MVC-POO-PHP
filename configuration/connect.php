<?php
    define('HOST', 'localhost');
    define('DBNAME', 'crud-mvc-poo-php');
    define('USER', 'root');
    define('PASSWORD', '');

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
                echo "Error to connect with Database!".$e->getMessage();
                die();
            }
        } 

    }

<<<<<<< HEAD
   $testConnection = new Connect();
?>
=======
?>
>>>>>>> 651acba0162e63a2447e91e1b1e4ea42db73d7e6
