<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Política">
        <meta name="author" content="Thalles Rangel Lopes">
        <title>Alcântaro Filho | Admin</title>
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/dashboard.css"/>
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/bootstrap.min.css"/>
        <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?=BASE_URL?>assets/js/script.js"></script>
        <script type="text/javascript" src="<?=BASE_URL?>assets/js/responsive.js"></script>

        <script type="text/javascript" src="<?=BASE_URL?>assets/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        
        <link href="<?=BASE_URL?>assets/css/select2.min.css" rel="stylesheet" />
        <script src="<?=BASE_URL?>assets/js/select2.min.js"></script>

        <link href="<?=BASE_URL?>assets/css/sweetalert2.min.css" rel="stylesheet" />
        <script src="<?=BASE_URL?>assets/js/sweetalert2.all.min.js"></script>
       
        <script src="<?=BASE_URL?>assets/js/jquery.mask.min.js"></script>
        <link href="<?=BASE_URL?>assets/css/multiselect.css" rel="stylesheet" />
        <script src="<?=BASE_URL?>assets/js/multiselect.min.js"></script>
       
        <!-- SweetAlert2 -->
        <script src="<?=BASE_URL?>assets/js/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="<?=BASE_URL?>assets/css/sweetalert2.min.css">
    </head>
    <body>
    <?php
    require('views/mensagens.php');
    unset($_SESSION["msg"]);
    ?>
    <div class="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion offcanvas-collapse">
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-5 m-2">
                    <img width="170px" src="<?=BASE_URL?>/assets/img/logo.png"/> 
                </div>
            
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>sugestoes">
                    <span><img src="<?= BASE_URL?>assets/icon/clipboard.svg"> Sugestões</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>relatorios">
                    <span><img src="<?= BASE_URL?>assets/icon/file-text.svg"> Relatórios</span>
                    </a>
                </li> 
            </a>
        </ul>


        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                
                <nav class="navbar navbar-expand-lg shadow-sm bg-white mb-4 static-top w-100 ">
                        <a class="list-inline-item" href="<?=BASE_URL?>">
                            <span><img src="<?= BASE_URL?>assets/icon/home.svg"></span>
                        </a>
                    <ul class="list-inline ml-auto">
                    
                        <a class="list-inline-item mr-3">
                            <span><?=$_SESSION['nome_usuario']?></span>
                        </a>

                        <a class="list-inline-item mr-3" href="<?=BASE_URL?>login/logout">
                        <span><img src="<?= BASE_URL?>assets/icon/log-out.svg"></span>
                        </a>

                    </ul>

                    <!-- BUTTON RESPONSIVO-->
                    <button class="list-inline-item btn btn-sm btn-dark" type="button" id="navToggle" data-toggle="offcanvas">
                        <span>=</span>
                    </button>
                </nav>
                
                <div class="container">
                    <ul class="nav p-2 pl-3 breadcrumb">
                        <li class='nav-item'>
                            <?php $this->addBreadCrumb(); ?>
                        </li> 
                    </ul>
                </div>
                
                   
                    <?php
                        $this->loadViewInTemplateDashboard($viewName, $dados);
                    ?>
                   
            </div>
        </div>
    </div>

    </body>
</html>