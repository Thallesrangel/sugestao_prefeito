<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/bootstrap.min.css"/>
       
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?=BASE_URL?>assets/js/script.js"></script>
        
        <link href="<?=BASE_URL?>assets/css/sweetalert2.min.css" rel="stylesheet" />
        <script src="<?=BASE_URL?>assets/js/sweetalert2.all.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/select2.min.css"/>
        <script  src="<?=BASE_URL?>assets/js/select2.min.js"></script>
        <title>Alcântaro Filho | Pré-candidato a prefeito de Aracruz</title>
        <link rel='icon' href='<?= BASE_URL?>assets/icon/icon.png' type='image/x-icon' sizes="16x16" />
    </head>
    <body>

    <?php
        require('views/mensagens.php');
        unset($_SESSION["msg"]);
    ?>

    <?php $this->loadViewInTemplate($viewName, $dados);?>

    </body>
</html>