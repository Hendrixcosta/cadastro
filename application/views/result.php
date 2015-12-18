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
            <div class="col-sm-10 col-sm-offset-1 resultsdo" >
                 
                 
                <?php 
                        if($tipo=="Sucesso"){
                            echo '<div class="alert alert-success">';
                        }else {
                            echo '<div class="alert alert-warning">';
                        }
                 
                ?>          
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong> <?php echo "<h4>". $tipo ; ?>
                    </strong> 
                    <?php echo $mensagem;?>
            </div>

        </div> 
</div>
      
    
