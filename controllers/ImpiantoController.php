<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

    class ImpiantoController {
        public function getImpianto(Request $request, Response $response, $args) {
            $impianto = new Impianto('Impianto1', '45.1234', '9.5678');
            return $response->withJson($impianto);
        }
    }
?>