<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class TabelaController
{
    //função que mostra todos os dados da tabela
    public static function index()
    {
        
        $q = new QueryBuilder();
        $dados = $q->select('tabela');

        require './app/views/tabela/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $dados['dado1'] = $_POST['dado1'];
            $dados['dado2'] = $_POST['dado2'];

            $crud = new QueryBuilder();
            $d = $crud->insert('tabela',$dados);

            header('Location: /tabela');

        }

        require './app/views/tabela/create.php';
    }
}
