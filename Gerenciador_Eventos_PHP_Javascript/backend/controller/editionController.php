<?php

    namespace controller;
    require_once '../config.php';
    require '../utils.php';
    
    class EditionController{
        
        private $connect;
        
        public function __construct() {
            $this->connect = new \connection\Connection();
        }
        
        public function create(\Edition $edition) {
            
           $value = array(
                ":idEvent" => clearInputs($edition->idEvent),
                ":descript" => clearInputs($edition->descript),
                ":dateStart" => \DateTime::clearInputs($edition->dateStart),
                ":dateEnd" => \DateTime::clearInputs($edition->dateEnd),
                ":area" => clearInputs($edition->area),
                ":statusVisible" => clearInputs($edition->statusVisible),
                ":statusActive" => clearInputs($edition->statusActive),
                ":registrationPeriodStart" => \DateTime::clearInputs($edition->registrationPeriodStart),
                ":registrationPeriodEnd" => \DateTime::clearInputs($edition->registrationPeriodEnd),
                ":editionNumber" => clearInputs($edition->editionNumber),
                ":formatType" => clearInputs($edition->formatType),
                ":orderText" => clearInputs($edition->orderText),
                ":imageURL" => clearInputs($edition->imageURL)
            );
 
            $sql = "INSERT INTO event (
                        idEvent, descript, dateStart, dateEnd, area, statusVisible, statusActive,
                        registrationPeriodStart, registrationPeriodEnd, editionNumber, formatType, orderText, imageURL) 
                    VALUES (:idEvent, :descript, :dateStart, :dateEnd, :area, :statusVisible, :statusActive,
                        :registrationPeriodStart, :registrationPeriodEnd, :editionNumber, :formatType, :orderText, :imageURL)";
            
            $this->connect->query($sql, $value);
        }
        
        public function edit(\Edition $edition) { 
            
            $value = array(
                ":idEdition" => clearInputs($edition->idEdition),
                ":idEvent" => clearInputs($edition->idEvent),
                ":descript" => clearInputs($edition->descript),
                ":dateStart" => \DateTime::clearInputs($edition->dateStart),
                ":dateEnd" => \DateTime::clearInputs($edition->dateEnd),
                ":area" => clearInputs($edition->area),
                ":statusVisible" => clearInputs($edition->statusVisible),
                ":statusActive" => clearInputs($edition->statusActive),
                ":registrationPeriodStart" => \DateTime::clearInputs($edition->registrationPeriodStart),
                ":registrationPeriodEnd" => \DateTime::clearInputs($edition->registrationPeriodEnd),
                ":editionNumber" => clearInputs($edition->editionNumber),
                ":formatType" => clearInputs($edition->formatType),
                ":orderText" => clearInputs($edition->orderText),
                ":imageURL" => clearInputs($edition->imageURL)
            );
            
            $sql = "UPDATE edition SET 
                        descript = :descript,
                        dateStart = :dateStart,
                        dateEnd = :dateEnd,
                        area = :area,
                        statusVisible = :statusVisible,
                        statusActive = :statusActive,
                        registrationPeriodStart = :registrationPeriodStart,
                        registrationPeriodEnd = :registrationPeriodEnd,
                        editionNumber = :editionNumber,
                        formatType = :formatType,
                        orderText = :orderText,
                        imageURL = :imageURL
                    WHERE  idEvent = :idEvent AND idEdition = :idEdition";
            
            $this->connect->query($sql, $value);
        }
        
        public function delete(int $idEvent, int $idEdition ) {
        
            $value = array(
                ":idEvent" => $idEvent,
                ":idEdition" => $idEdition
            );

            $sql = "DELETE FROM edition WHERE idEvent = :idEvent AND idEdition = :idEdition";
            $this->connect->query($sql, $value);
       }
   
    }
?>


