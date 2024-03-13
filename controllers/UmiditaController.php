<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

    class UmiditaController {
        public function getRilevatori(Request $request, Response $response, $args) {
            $impianto = new Impianto('Impianto1', '45.1234', '9.5678');
            $rilevatoriUmidita = array_filter($impianto->rilevatori, function ($rilevatore) {
                return $rilevatore instanceof RilevatoreDiUmidita;
            });
            return $response->withJson($rilevatoriUmidita);
        }
    
        public function getRilevatore(Request $request, Response $response, $args) {
            $impianto = new Impianto('Impianto1', '45.1234', '9.5678');
            $rilevatore = array_filter($impianto->rilevatori, function ($rilevatore) use ($args) {
                return $rilevatore->identificativo === $args['identificativo'];
            });
            return $response->withJson($rilevatore);
        }
    
        public function getMisurazioni(Request $request, Response $response, $args) {
            $impianto = new Impianto('Impianto1', '45.1234', '9.5678');
            $rilevatore = array_filter($impianto->rilevatori, function ($rilevatore) use ($args) {
                return $rilevatore->identificativo === $args['identificativo'];
            });
            return $response->withJson($rilevatore[0]->misurazioni);
        }
    
        public function getMisurazioniMaggioreDi(Request $request, Response $response, $args) {
            $impianto = new Impianto('Impianto1', '45.1234', '9.5678');
            $rilevatore = array_filter($impianto->rilevatori, function ($rilevatore) use ($args) {
                return $rilevatore->identificativo === $args['identificativo'];
            });
            $misurazioniFiltrate = array_filter($rilevatore[0]->misurazioni, function ($misurazione) use ($args) {
                return $misurazione['valore'] > $args['valore_minimo'];
            });
            return $response->withJson($misurazioniFiltrate);
        }
    }
?>