<?php
    abstract class Rilevatore {
        protected $identificativo;
        protected $misurazioni = [];
        protected $unitaDiMisura;
        protected $codiceSeriale;
    
        public function __construct($identificativo, $unitaDiMisura, $codiceSeriale) {
            $this->identificativo = $identificativo;
            $this->unitaDiMisura = $unitaDiMisura;
            $this->codiceSeriale = $codiceSeriale;
        }
    
        public function addMisurazione($data, $valore) {
            $this->misurazioni[] = ['data' => $data, 'valore' => $valore];
        }
    }

?>