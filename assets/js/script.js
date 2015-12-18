TAM_MAX = 21;


function validacao(){
   
   valida=true;
   
   
    // Validacao do campo nascimento--------------------------------------------
    var nascimento = document.form.nascimento.value;
    var regexp = /[0-9]{2}-[0-9]{2}-[0-9]{4}/g;
    
    if (nascimento.length != 10 || !regexp.test(nascimento)){
        
        document.form.nascimento.focus();
        document.getElementById("nascimento-msg").innerHTML="Data inválida. <p>Tente novamente no Formato: (DD-MM-AAAA)";
        valida = false;
    }else {
        document.getElementById("nascimento-msg").innerHTML="";
    }
    //-------------------------------------------------------------------------- 
   
   
   
   //validacao do campo email--------------------------------------------------
    var email = document.form.email.value;
    usuario = email.substring(0, email.indexOf("@")); 
    dominio = email.substring(email.indexOf("@")+ 1, email.length); 
    
    if (email== ""){
        document.form.email.focus();
        document.getElementById("email-msg").innerHTML="*Obrigatório";
        valida = false;
    } else if (email.length > TAM_MAX){
        document.form.email.focus();
        document.getElementById("email-msg").innerHTML="*Email muito grande. Respeite o limite maximo de " + TAM_MAX +" caracteres.";
        valida = false;
    }else if ( email.indexOf("@") == -1 || email.indexOf(".") == -1 ||
             usuario.length <= 2 || dominio.length <= 2){

            document.form.email.focus();
            document.getElementById("email-msg").innerHTML="Email inválido. <p>Requerido: usuario@dominio.com";
            valida = false;
    } else {
        document.getElementById("email-msg").innerHTML="";
    }
    //--------------------------------------------------------------------------
   
   
   //validacao do campo nome ---------------------------------------------------
      var nome = document.form.nome.value;
        
        //verifica se o campo nome esta vazio        
        if (nome=="" ){
            //alert ("Por favor preencher o campo nome.");
            document.form.nome.focus();
            document.getElementById("nome-msg").innerHTML="*Obrigatório";
            valida=false;
        
        //verifica se a quantidade de caracteres inseridos ´é menor que umtamanho maximo
        }else if (nome.length > TAM_MAX){
            //alert ("Por favor preencha um nome com no máximo 255 letras.");
            document.getElementById("nome-msg").innerHTML="Nome deve ter no máximo " + TAM_MAX + " caracteres.";
            document.form.nome.focus();
            valida =false;
        }else {
            document.getElementById("nome-msg").innerHTML="";
        }
      
    //--------------------------------------------------------------------------
    
    
    
     
   
    
  
    
     return valida;
    
}

