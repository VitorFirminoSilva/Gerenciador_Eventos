<?php

    namespace model;

    class Event{
        private $idEvent;
        private $name;
        private $urlSRC;
        
        function __construct(
                $idEvent, 
                $name, 
                $urlSRC
                ) {
            $this->idEvent = $idEvent;
            $this->name = $name;
            $this->urlSRC = $urlSRC;
        }
        
        function __set($name, $valor) {
            $this->$name = $valor;
        }

        function __get($name) {
            return $this->$name;
        }
    }
?>

