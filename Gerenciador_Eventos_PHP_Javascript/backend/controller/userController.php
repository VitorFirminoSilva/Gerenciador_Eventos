<?php
    
    namespace controller;
    require_once '../config.php';
    require '../utils.php';
    
    class UserController{
        
        private $connect;
        private $envArray;
        
        public function __construct() {
            $this->connect = new \connection\Connection();
            $this->envArray = include "../falseEnv.php";
        }
        
        public function create($user) {
            
            $value = array(
                ":name" => $user->name,
                ":birthDate" => $user->birthDate,
                ":CEP" => $user->CEP,
                ":city" => $user->city,
                ":UF" => $user->UF,
                ":address" => $user->address,
                ":cellphone" => $user->cellphone,
                ":CPF" => $user->CPF,
                ":email" => $user->email,
                ":password" => sha1($user->password),
                ":active" => true,
            );
 
            $sql = "INSERT INTO user (name, birthDate, CEP, city, UF, address, cellphone, CPF, email, password, active) VALUES 
                    (:name, :birthDate, :CEP, :city, :UF, :address, :cellphone, :CPF, :email, :password, :active)";
            
            $response = $this->connect->query($sql, $value);
            
            echo json_encode($response);
            return;
        }
        
        public function edit($user) {
            
            $value = array(
                ":id" => clearInputs($user->id),
                ":name" => clearInputs($user->name),
                ":birthDate" => \DateTime::clearInputs($user->birthDate),
                ":CEP" => clearInputs($user->CEP),
                ":city" => clearInputs($user->city),
                ":UF" => clearInputs($user->UF),
                ":address" => clearInputs($user->address),
                ":cellphone" => clearInputs($user->cellphone), 
            );
            
            $sql = "UPDATE user SET 
                        name = :name, 
                        birthDate = :birthDate, 
                        CEP = :CEP, 
                        city = :city, 
                        UF = :UF, 
                        address = :address, 
                        cellphone = :cellphone
                    WHERE  idUser = :id";
            
            $this->connect->query($sql, $value);
        }
        
        public function delete($id) {
        
            $value = array(
                ":id" => $id,
            );


            /*$sql = 'SELECT * FROM matricula where identificacao = :id';

            if(!empty($this->conexao->select($sql, $valor))){
                return "FALSE";
            }else{
                $sql = "delete from participante where identificacao= :id";
                $this->conexao->query($sql, $valor);
                return "TRUE";
            } */
            
            $sql = "UPDATE user SET 
                        active = false
                    WHERE  idUser = :id";
            $this->connect->query($sql, $value);

       }
   
    }
?>

