<?php

if (!isset($_SESSION['id_usuario'])) {
    header("Location:".BASE_URL."login");
}

class dashboardController extends Controller
{   
    public function index() 
    {           
        $breadcrumb = [
			'Início' => '',
			'Dashboard' => 'false',
        ];
        
        $dados = [];

        $this->setBreadCrumb($breadcrumb);
        $this->loadViewInTemplateDashboard('dashboard', $dados);
    }    
}