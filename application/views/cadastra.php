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

<div class="content col-sm-8 col-sm-offset-2" >
    
        <div class="row col-sm-10 col-sm-offset-1 promocao" >
                    <?php echo "<h3>".$promocao."<h3>";?>
        </div>
    
        <div class="row">
                    <form name="form" id="formulario" method="POST" action = "<?php echo base_url("Store") ?>" class="form-group col-sm-10 push-sm-2 formulario" onSubmit="return validacao()">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center">Nome:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="Nome">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center">Email:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="email" id="email" value="" placeholder="email@dominio.com">
                                </div>
                            </div>                
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center" >Data de Nascimento:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nascimento" id="nascimento" value=""  placeholder="DD-MM-AAAA">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center" >Gênero:</label>
                                <div class="col-sm-12">
                                    <select class="form-control" id="sel1">
                                        <option></option>
                                        <option>M</option>
                                        <option>F</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label col-sm-12 text-center" >Gênero:</label>
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
                
            </div><!-- div row -->


           

        
    
</div><!-- div content -->