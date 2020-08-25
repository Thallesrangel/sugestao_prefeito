<?php

if(isset($_SESSION['msg'])){

    switch($_SESSION['msg']) {
        case "registrado": 
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso ',
                text: 'Registrado com sucesso'
            })  
            </script>";   
            break;

        case "deletado": 
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso ',
                text: 'Registro excluído'
            })  
            </script>";   
            break;

        case "email_ou_senha_incorreto":
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'E-mail ou senha incorreto'
            })  
            </script>";  
            break;

        case "report_sem_post":
            echo "<script>
            Swal.fire({
                icon: 'warning',
                title: 'Aviso',
                text: 'Necessário preencher para gerar o relatório'
            })  
            </script>";

        case "erro_sugestao":
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Erro ao enviar a sugestão'
            })  
            </script>";  
            break;

        case "sugestao_registrado": 
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Obrigado!',
                text: 'Sua sugestão foi enviada com sucesso'
            })  
            </script>";   
            break;
    }
}
?>