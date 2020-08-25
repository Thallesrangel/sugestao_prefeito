<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="política">
        <meta name="author" content="Thalles Rangel Lopes">
        <title>Alcantaro</title>
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/bootstrap.min.css"/>
        <script src="<?=BASE_URL?>assets/js/jquery-3.5.1.min.js"></script>
        
        <!-- SweetAlert2 -->
        <script src="<?=BASE_URL?>assets/js/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="<?=BASE_URL?>assets/css/sweetalert2.min.css">
</head>

<style>
.login-body{
    background-repeat: no-repeat;
    background: url('assets/img/background/bg.svg');
    background-position: center;
    font-family: 'Barlow', sans-serif; 
    background-size: cover;
}
.tamanho-largura {
    max-width: 340px;
    height: auto;
    background: #FFF;
    border: 2px solid #ecf0f1; 
    border-radius: 10px;
}
</style>
<body class="login-body">

<?php
    require('views/mensagens.php');
    unset($_SESSION["msg"]);
?>

    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="container tamanho-largura shadow-lg p-3 mb-5 bg-white rounded">
                    
                <div class="d-flex justify-content-center">
                    <img class="img-fluid logo-login" src="<?=BASE_URL . 'assets/img/logo.png'?>">
                </div>
                
                <br>

                <form action="<?=BASE_URL.'login/logar'?>" method="POST" id="form" autocomplete="off">

                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="email" name="email" placeholder="Digite seu e-mail"
                            autocomplete="off" id="campo" required/>
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" autocomplete="off" required/>
                    </div>

                    <div class="row">

                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-block btn-primary p-2">Entrar</button>
                        </div>	
                </form>
                
            </div>
        </div>
    </div>
</body>