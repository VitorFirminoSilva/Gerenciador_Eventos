<?php

    namespace model;
    
    class Edition{
        
        private $idEdition;
        private $idEvent;
        private $descript;
        private $dateStart;
        private $dateEnd;
        private $area;
        private $statusVisible;
        private $statusActive;
        private $registrationPeriodStart;
        private $registrationPeriodEnd;
        private $editionNumber;
        private $formatType;
        private $orderText;
        private $imageURL;
        
        function __construct(
                int $idEdition, 
                \Event $idEvent, 
                string $descript, 
                \DateTime $dateStart, 
                \DateTime $dateEnd, 
                string $area, 
                bool $statusVisible, 
                bool $statusActive, 
                \DateTime $registrationPeriodStart, 
                \DateTime $registrationPeriodEnd, 
                int $editionNumber, 
                \Format $formatType, 
                \Order $orderText,
                string $imageURL) {
            $this->idEdition = $idEdition;
            $this->idEvent = $idEvent;
            $this->descript = $descript;
            $this->dateStart = $dateStart;
            $this->dateEnd = $dateEnd;
            $this->area = $area;
            $this->statusVisible = $statusVisible;
            $this->statusActive = $statusActive;
            $this->registrationPeriodStart = $registrationPeriodStart;
            $this->registrationPeriodEnd = $registrationPeriodEnd;
            $this->editionNumber = $editionNumber;
            $this->formatType = $formatType;
            $this->orderText = $orderText;
            $this->imageURL = $imageURL;
        }
        
        function __set($name, $valor) {
            $this->$name = $valor;
        }

        function __get($name) {
            return $this->$name;
        } 
    }
?>
