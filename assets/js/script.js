

TAM_MAX = 10;


function validacao(){
   
   
   //validacao do campo nome ---------------------------------------------------
      var nome = document.form.nome.value;
        //alert (nome);
        
        if (nome=="" ){
            alert ("Por favor preencher o campo nome.");
            document.form.nome.focus();
            document.getElementById("nome-msg").innerHTML="*Obrigatório";
            return false;
        }else if (nome.length > TAM_MAX){
            alert ("Por favor preencha um nome com no máximo 255 letras.");
            document.form.nome.focus();
            return false;
        }
      
    //--------------------------------------------------------------------------
    
    
    //validacao do campo email--------------------------------------------------
    var email = document.form.email.value;
    usuario = email.substring(0, email.indexOf("@")); 
    dominio = email.substring(email.indexOf("@")+ 1, email.length); 
    
    if (email== ""){
        alert ("Email é um campo obrigatorio!");
        document.form.email.focus();
        return false;
    }
    
    if (email.length > TAM_MAX){
        alert ("Email muito grande. Respeite o limite maximo");
        document.form.email.focus();
        return false;
    }
    
    if ( email.indexOf("@") == -1 || email.indexOf(".") == -1 ||
             usuario.length <= 2 || dominio.length <= 2){
        
            alert ("Formato de email invalido.Favor preencher um email válido no formato: usuario@dominio");
            document.form.email.focus();
            return false;
    }
    //--------------------------------------------------------------------------
     
   
    
    // Validacao do campo nascimento--------------------------------------------
    var nascimento = document.form.nascimento.value;
    var regexp = /[0-9]{2}-[0-9]{2}-[0-9]{4}/g;
    
    if (nascimento.length != 10 || !regexp.test(nascimento)){
        alert ("Favor preencher a Data de nascimento em um formato válido. (DD-MM-AAAA)");
        document.form.email.focus();
        return false;
    }
       
    
     return true;
    
}

