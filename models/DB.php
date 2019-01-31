<?php

    class DB
    {
        private static $instance = null;
        private $host = 'localhost';
        private $db = 'lab2';
        private $uname = 'root';
        private $pass = '';
        private $con;


        private function __construct()
        {
            $this->con = new \PDO("mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8", $this->uname, $this->pass);

            $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
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
