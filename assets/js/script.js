




function ola (){
    alert ("ola");
}


function validacao(){
   
   
   //validacao do campo nome ---------------------------------------
   /*    var nome = document.form.nome.value;
        //alert (nome);
        if (nome=="" ){
            alert ("Por favor preencher o campo nome.");
            document.form.nome.focus();
            return false;
        }else if (nome.length > 255){
            alert ("Por favor preencha um nome com no máximo 255 letras.");
            document.form.nome.focus();
            return false;
        }
    */    
    //---------------------------------------------------------------
    
    
    //validacao do campo email----------------------------------------
    var email = document.form.email.value;
    usuario = email.substring(0, email.indexOf("@")); 
    dominio = email.substring(email.indexOf("@")+ 1, email.length); 
    
    if (email.indexOf("@")==-1 || 
        email.indexOf(".")==-1 ||
        usuario.length <= 3 ||
        dominio.length <= 3) 
    {
        alert ("Formato de email invalido.Favor preencher um email válido no formato: usuario@dominio");
        document.form.email.value.focus();
        return false;
    }
    


    
    
    
    return false;
    
    
    
        //alert (nome);
 
    //----------------------------------------------------------------
    
}


/*var nome = document.form.nome.value;
    //alert (nome);
    if (nome=="" ){
        alert ("Por favor preencher o campo nome.");
    }else if (nome.length > 5){
        alert ("Por favor preencha um nome com no máximo 255 letras.");
    }
    
    
    
    
           if (email=="" ){
            alert ("Por favor preencher o campo email.");
            document.form.email.focus();
            return false;
        }else if (email.length > 5){
            alert ("Por favor preencha um email com no máximo 255 letras.");
            document.form.email.focus();
            return false;
        }
    
    */