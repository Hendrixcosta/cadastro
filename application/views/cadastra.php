<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cadastra
 *
 * @author Hendrix
 */
?>

<div class="wrapper" role="main">
    <div class="container">
        <div class="row">

            
            <div id="conteudo" class="col-md-9">
                <div class="row" >
                    
                    <div id="titulo" class="col-sm-12">
                        <h3>Por favor, entre com seus dados</h3>
                    </div>
                    
                    <form id="formulario" method="POST" action = "<?php echo base_url("Store") ?>" class="form-group col-sm-10 push-sm-2 formulario" role="form">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center" for="fname">Nome:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="Nome">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center" for="email">Email:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="email" id="email" value="" placeholder="email@dominio.com">
                                </div>
                            </div>                
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center" for="street">Data de Nascimento:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nascimento" id="nascimento" value=""  placeholder="DD-MM-AAAA">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center" for="city">Gênero:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="genero" id="genero" value=""  placeholder="M ou F">
                                </div>
                            </div>
                        </div>
                       
                        
                        <div class="row">
                            <div class="form-group"> 
                                <div class="col-sm-2 text-left">
                                    <button type="submit" class="btn btn-success" >Cadastrar</button>
                                </div>
                                <div class=" col-sm-2 text-right">
                                    <button type="reset" class="btn btn-danger" onclick="location.href = 'index.php'">Voltar </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div><!-- div conteudo -->

        </div><!-- div row container -->
    </div><!-- div container -->
</div><!-- div wrapper -->