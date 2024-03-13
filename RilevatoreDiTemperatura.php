<?php
    class RilevatoreDiTemperatura extends Rilevatore {
        private $tipologia;
    
        public function __construct($identificativo, $tipologia, $codiceSeriale) {
            parent::__construct($identificativo, '°C', $codiceSeriale);
            $this->tipologia = $tipologia;
        }
    }
?>