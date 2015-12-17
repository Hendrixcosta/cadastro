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
    
        <div class="row">
             <div class="col-sm-10 col-sm-offset-1 promocao" >
                 
                    <?php echo "<h3>".$promocao."<h3>";?>
            </div> 
        </div>
    
    <div class="row">
        
        <div class="col-sm-5" id="lojas" class="lojas">
            <img  width="300px" src="https://encontrebarato.com.br/lp/imagens/lojas.jpg">
        </div>
        
        <div class="col-sm-7" id="sidebar" style="" >
            
            <div class="row col-sm-11" >
                <form name="form" class="form-horizontal" method="POST" action = "<?php echo base_url("Store") ?>"  onSubmit="return validacao()" >
                    <fieldset>    
                    
                        <legend class="titulo-form">
                            Efetuar cadastro
                        </legend>
                        
                        <div class="row">
                             <div class="form-group col-sm-12">
                                <div class="col-sm-12">
                                                                  
                                    <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="Insira seu nome">
                                    <p id="nome-msg" class="help-block"></p>
                                </div>    
                            </div>
                        </div>
               
                        
                        
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <div class="col-sm-12">
                                    
                                    <input type="text" class="form-control" name="email" id="email" value="" placeholder="Insira seu email (usuario@dominio.com)">
                                    <p id="email-msg" class="help-block"></p>
                                </div>
                            </div>                
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <div class="col-sm-12">
                                    
                                    <input type="text" class="form-control" name="nascimento" id="nascimento" value=""  placeholder="Data de Nascimento (DD-MM-AAAA)">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <div class="col-sm-12">
                                    
                                    <select class="form-control" id="sel1" >
                                        <option>Selecione seu gênero</option>
                                        <option>M</option>
                                        <option>F</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        
                                               
                        
                        <div class="row">
                            
                                <div class="text-center">
                                    <button type="submit" class="btn btn-block btn-success" >Cadastrar</button>
                                </div>
                                
                            
                        </div>
                    </fieldset>       
                </form>
            </div>
            
        </div>
        
        
        
                    
                
            </div><!-- div row -->


           

        
    
</div><!-- div content -->