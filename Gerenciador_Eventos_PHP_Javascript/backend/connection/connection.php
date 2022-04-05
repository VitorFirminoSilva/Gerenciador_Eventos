<?php

    namespace connection;
    
    

    class Connection extends \PDO{
        
        private $connect;
        private $envArray;

        public function __construct() {
            $this->envArray = include '../falseEnv.php';
            $this->connect = new \PDO($this->envArray["serverName"], $this->envArray["userName"], $this->envArray["password"]);
            $this->connect->exec("set names utf8");
        }
        
        public function query($rawquery, $params = array()){
            $statement = $this->connect->prepare($rawquery);
            $this->attachParams($statement, $params);
            $statement->execute();
            return $statement->errorInfo();
        }
        
        public function select($rawquery, $params = array()){
            $statement = $this->query($rawquery, $params);
            return $statement->fetch(\PDO::FETCH_ASSOC);
        }
        
        public function selectAll($rawquery, $params = array()){
            $statement = $this->query($rawquery, $params);
            return $statement->fetchAll(\PDO::FETCH_ASSOC);
        }
        
        public function attachParams($statement, $params = array()){
            foreach($params as $key => $value){
                $this->setParam($statement, $key, $value);
            }
        }
        
        public function setParam($statement, $key, $value){
            $statement->bindParam($key, $value);
        }
        
        public function getConnection(){
            return $this->connect;
        }
        
    }
    
?>
