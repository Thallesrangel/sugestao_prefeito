<?php

class sugestoesController extends Controller 
{   
    public function index()
    {
        if (!isset($_SESSION['id_usuario'])) {
            header("Location:".BASE_URL."login");
        }
        
         $breadcrumb = [
			'Início' => '',
            'Sugestões' => 'false',
            'Listagem' => 'false',
        ];
        $dados = [];
        $sugestoes = new Sugestao();
        // Paginação
        $offset = 0;
        $limit = 4;
        $total = $sugestoes->getTotal();
        // total Paginas
        $dados['paginas'] = ceil($total/$limit);
        // Pagina Atual
        $dados['paginaAtual'] = 1;

        if(!empty($_GET['p'])) {
            $dados['paginaAtual'] = $_GET['p'];
        }

        $offset = ($dados['paginaAtual'] * $limit) - $limit;
        
        //Limitar os link antes depois
        $dados['max_links'] = 1;

        $dados['lista'] = $sugestoes->getAll($offset, $limit);

        $this->setBreadCrumb($breadcrumb);
        $this->loadTemplateDashboard('sugestoes', $dados);
    }

    public function registrar()
    {   
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $id_bairro = $_POST['id_bairro'];
        $idade = $_POST['idade'];
        $tema = $_POST['tema'];
        $txtSugestao = $_POST['sugestao'];

        $sugestao = new Sugestao();

        if ( $sugestao->add($nome, $email, $telefone, $idade, $id_bairro, $tema, $txtSugestao)) {
            $_SESSION['msg']= 'sugestao_registrado';
            header("Location: ".BASE_URL);
        } else {
            $_SESSION['msg'] = 'erro_sugestao';
            header("Location: ".BASE_URL);
        }   
    }

    public function deletar($id)
    {
      if (!empty($id)) {
        $sugestao = new Sugestao();
        $sugestao->delete($id);
      }
      $_SESSION['msg'] = 'deletado';
      header("Location: ".BASE_URL."sugestoes");
    }
}