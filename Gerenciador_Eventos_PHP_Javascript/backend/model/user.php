<?php

    namespace model;
    
    class User{
        private $idUser;
        private $name;
        private $birthDate; 
        private $CEP;
        private $city;
        private $UF;
        private $address;
        private $cellphone;
        private $CPF;
        private $email;
        private $password;
        private $logged;
        private $active;
        private $userLevel;
        
        
        function __set($name, $valor) {
            $this->$name = $valor;
        }

        function __get($name) {
            return $this->$name;
        }
    }
?>

