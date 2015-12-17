<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--Título da página-->
        <title><?php echo $title ?></title>
        
        <!--load jquery -->
        <script type='text/javascript' src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <!--load javascript master-->
        <script type='text/javascript' src="<?php echo base_url('assets/js/script.js'); ?>"></script>
        <!--load bootstrap-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <!--load javascript bootstrap-->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!--load CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css'); ?>">
    </head>
    
    <body>
    <!-- div container onde vai toda a pagina -->
    
    

    <!--primeira linha responsável só pelo cabeçalho-->
        <header class="row cabecalho">
            
            <div class="container col-sm-12 text-center">
                <div class="col-sm-3" >
                </div>

                <div class="col-sm-4" >
                   
                </div>

                <div class="col-sm-2">
                   <a class="login-btn" onclick="login();">
                       <!--  <a href=" <?php echo base_url('login')?>" >-->
                    <img width="35px" style="margin-top:30px" src="<?php echo base_url('assets/imagens/login.png')?>"  alt="Imagem Não Encontrada" />
                    </a>
                    
                    <a href="<?php echo base_url('carrinho')?>" >
                     <img width="35px" style="margin-top:30px; margin-left:30px " src="<?php echo base_url('assets/imagens/carrinho.png')?>"  alt="Imagem Não Encontrada" /></a>
                </div>
                    
           


                
            </div>
        </header>   
    
    
    
    
    <!-- Vou utilliza só o centro da pagina ignorando a primeira e ultima colunas-->
    <div class="container col-sm-10 col-sm-push-4">
        
        
        <!-- div row onde vai todo o conteúdo -->
        <div class="row">
            
            