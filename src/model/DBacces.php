<?php
namespace src\model;

class DBacces{

        public $db;

        public function __construct()
        {
            
            $this->db = $this->getConnect();
        }

        public function getConnect(){

            $host = "localhost";
            $user = "root";
            $dbname = "bpmape_gr2";
            $password = "";
            $dsn = "mysql:host=$host;dbname=$dbname";

            //$db = null;
            try {
                $db = new \PDO($dsn, $user, $password);

            }catch(\PDOException $ex) {
                die ("Error : ".$ex->getMessage());
            }

            return $db;

        }
}
?>