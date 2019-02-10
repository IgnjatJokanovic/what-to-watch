<?php
    namespace models;
    use PDO;
    class DB
    {
        private static $instance = null;
        private $host = 'localhost';
        private $db = 'imdb';
        private $uname = 'root';
        private $pass = '';
        private $con;


        private function __construct()
        {
            try{
                $this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8", $this->uname, $this->pass);

                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            }
            catch(PDOException $msg){
                echo $msg;
            }
           
        }

        public static function getInstance()
        {
            if(!self::$instance)
            {

                self::$instance = new DB();

            }
        
            return self::$instance;
        }

        public function getConnection()
        {
            return $this->con;
        }

    }
