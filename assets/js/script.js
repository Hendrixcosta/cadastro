




function ola (){
    alert ("ola");
}


function validacao(){
    
   var nome = document.form.nome.value;
    //alert (nome);
    if (nome=="" ){
        alert ("Por favor preencher o campo nome.");
        document.form.nome.focus();
        return false;
    }else if (nome.length > 5){
        alert ("Por favor preencha um nome com no máximo 255 letras.");
        document.form.nome.focus();
        return false;
    }else {
        return true;
    }
    
    
}


/*var nome = document.form.nome.value;
    //alert (nome);
    if (nome=="" ){
        alert ("Por favor preencher o campo nome.");
    }else if (nome.length > 5){
        alert ("Por favor preencha um nome com no máximo 255 letras.");
    }*/