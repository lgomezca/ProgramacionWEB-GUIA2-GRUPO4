/**************************************************************************************
        Función para Ocultar o Mostrar campos del formulario de ingreso        
-------------------------------------------------------------------------------------*/
function verElementos(tpingreso) {   
    //Ocultar Campos del formulario de ingreso
   if(tpingreso=="l") {
        var elemento=document.getElementsByClassName('registro');        
        for(var j=0;j<elemento.length;j++){
            elemento[j].style.display='none';
        }

   }
    //Mostrar campos del formulario de ingreso
    if(tpingreso=="r") {
        var elemento=document.getElementsByClassName('registro');        
        for(var j=0;j<elemento.length;j++){
            elemento[j].style.display='block';
        }

   }
}   

/****************************************************************************************
                    Función para limpiar campos del formulario de ingreso 
---------------------------------------------------------------------------------------*/
function limpiarElementos(){     
    var elementos = document.getElementById('formulario-ingreso');    
    for(var i=0;i < elementos.elements.length;i++){
        if(elementos.elements[i].type=="text" || elementos.elements[i].type=="email" ||                         elementos.elements[i].type=="password"){
            elementos.elements[i].value="";           
        }         
    }  
}

/****************************************************************************************
                    Función para validar el password
---------------------------------------------------------------------------------------*/
function validaConfPassword() {
    var pass = document.getElementById("Password");
    var cfpass = document.getElementById("ConfirmarPassword");
    if(pass.value != cfpass.value) {
        alert("El password y la confirmación no son iguales");
    }

}

/****************************************************************************************
                    Función para validar campos vacios
---------------------------------------------------------------------------------------*/
function validarElementos(){
    var j=0;
    var msj='Complete los siguientes campos\n\r\n';
    var error=false;      
     
    var tipoIngreso = document.getElementsByName("tpingreso");      
    for(var i=0; i < tipoIngreso.length;i++){        
        if(tipoIngreso[i].checked){
            if(tipoIngreso[i].value=='l'){
                var elementos = document.getElementsByClassName('login');
            }else{
                var elementos = document.getElementsByClassName('reguser');
            }        
        }        
    }      
     
    while(j < elementos.length){
        if(elementos[j].value.length==0){
            msj += "* " + elementos[j].id + '\n';
            elementos[j].focus();
            error=true;
        }
        j++;
    }

    if(error==true){
        alert(msj);
        return false;
    }else{
        return true;
    }  
}