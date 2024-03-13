<?php
    class RilevatoreDiUmidita extends Rilevatore {
        private $posizione;
    
        public function __construct($identificativo, $posizione, $codiceSeriale) {
            parent::__construct($identificativo, '%', $codiceSeriale);
            $this->posizione = $posizione;
        }
    }
?>