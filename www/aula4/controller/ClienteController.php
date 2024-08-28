<?php

class ClienteController{

    public function salvarCliente()
    {

        $pagina = require_once("../view/criar.php");

        return $pagina;
    }

    public function listarCliente()
    {
        $listaDeClientes = [
            [
                "nome" => "Paula",
                "cpf" => "000.000.000-00"
            ],
            [
                "nome" => "Pedro",
                "cpf" => "111.111.111-11"
            ]
        ];
        $pagina = require_once("../view/listar.php");

        return $pagina;
    }
}

$clienteController = new ClienteController();
$clienteController->listarCliente();
