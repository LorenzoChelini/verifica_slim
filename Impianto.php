<?php
    class Impianto {
        private $nome;
        private $latitudine;
        private $longitudine;
        private $rilevatori = [];
    
        public function __construct($nome, $latitudine, $longitudine) {
            $this->nome = $nome;
            $this->latitudine = $latitudine;
            $this->longitudine = $longitudine;
            $this->populateRilevatori();
        }
    
        private function populateRilevatori() {
            $umidita = new RilevatoreDiUmidita('1', 'terra', '12345');
            $umidita->addMisurazione('2024-03-13', 50);
            $this->rilevatori[] = $umidita;
    
            $temperatura = new RilevatoreDiTemperatura('2', 'acqua', '67890');
            $temperatura->addMisurazione('2024-03-13', 25);
            $this->rilevatori[] = $temperatura;
        }
    }

?>