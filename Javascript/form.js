function Enviar(){
    var email = document.getElementById('email').innerHTML;

    if(document.forms[0].email.value.indexOf('@') == -1
    || document.forms[0].email.value.indexOf('.') == -1){
        alert('Informe um email Valido');
    }
    
   
}