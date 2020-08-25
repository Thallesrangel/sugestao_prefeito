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

    public function render()
    {
        if(empty($_POST)){
            # Quando não há POST para gerar o relatório
            $_SESSION['msg'] = 'report_sem_post';
            header("Location: ".BASE_URL."relatorios");
        }
        new ReportSugestao();
    }
}