<?php

class HomeController extends Controller
{   
    public function index() 
    {   
        $dados = [];

        $sugestoes = new Sugestao();
        $bairros = new Bairro();
    
        $dados['lista'] = $sugestoes->quantidadePorBairro();
        $dados['bairro'] = $bairros->getBairros();

        $this->loadTemplate('home', $dados);
    }    
}