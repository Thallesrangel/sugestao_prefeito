<?php

if (!isset($_SESSION['id_usuario'])) {
    header("Location:".BASE_URL."login");
}

class relatoriosController extends Controller 
{   
    public function index()
    {
         $breadcrumb = [
			'Início' => '',
            'Relatorios' => 'false',
        ];

        $dados = [];

        $bairros = new Bairro();
        $dados['bairros'] = $bairros->getBairros();

        $this->setBreadCrumb($breadcrumb);
        $this->loadTemplateDashboard('relatorios', $dados);
    }
}