<?php

//rotas da aplicação

switch ($uri) {
    
    case '/':

        require './app/views/index.php';
        break;

    case '/tabela':

        $tabelaController->index();
        break;

    case '/tabela/create':

        $tabelaController->create();
        break;
    
    default:
        die('Essa rota não é valida');
        break;
}
