<?php

    namespace controller;
    require_once '../config.php';
    require '../utils.php';
    
    class EventController{
        
        private $connect;
        
        public function __construct() {
            $this->connect = new \connection\Connection();
        }
        
        public function create(\Event $event) {
            
            $value = array(
                ":name" => clearInputs($event->name),
                ":urlSRC" => clearInputs($event->urlSRC)
            );
 
            $sql = "INSERT INTO event (name, urlSRC) VALUES (:name, :urlSRC)";
            
            $this->connect->query($sql, $value);
        }
        
        public function edit(\Event $event) {
            
            $value = array(
                ":id" => clearInputs($event->id),
                ":name" => clearInputs($event->name),
                ":urlSRC" => clearInputs($event->urlSRC)
            );
            
            $sql = "UPDATE event SET 
                        name = :name, 
                        urlSRC = :urlSRC, 
                    WHERE  idEvent = :id";
            
            $this->connect->query($sql, $value);
        }
        
        public function delete($id) {
        
            $value = array(
                ":id" => $id,
            );

            $sql = "DELETE FROM event WHERE idEvent = :id";
            $this->connect->query($sql, $value);
       }
   
    }
?>

