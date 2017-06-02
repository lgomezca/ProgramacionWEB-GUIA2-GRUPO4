/**************************************************************************************
        Función para Ocultar o Mostrar campos del formulario de ingreso        
-------------------------------------------------------------------------------------*/
function verElementos(tpingreso) {   
    //Ocultar Campos del formulario de ingreso
   if(tpingreso=="c") {
        var elemento=document.getElementsByClassName('registrar');        
        for(var j=0;j<elemento.length;j++){
            elemento[j].style.display='none';
        }
       var elemento=document.getElementsByClassName('consultar2');        
        for(var j=0;j<elemento.length;j++){
            elemento[j].style.display='none';
        }
       var elemento=document.getElementsByClassName('consultar');        
        for(var j=0;j<elemento.length;j++){
            elemento[j].style.display='block';
        }

   }
    //Mostrar campos del formulario de ingreso
    if(tpingreso=="r") {
        var elemento=document.getElementsByClassName('registrar');        
        for(var j=0;j<elemento.length;j++){
            elemento[j].style.display='block';
        }
         var elemento=document.getElementsByClassName('consultar');        
        for(var j=0;j<elemento.length;j++){
            elemento[j].style.display='none';
        }
        
        var elemento=document.getElementsByClassName('consultar2');        
        for(var j=0;j<elemento.length;j++){
            elemento[j].style.display='none';
        }

   }
}   

/****************************************************************************************
                    Función para limpiar campos del formulario de ingreso 
---------------------------------------------------------------------------------------*/
function limpiarElementos(){     
    var elementos = document.getElementById('libreta');    
    for(var i=0;i < elementos.elements.length;i++){
        if(elementos.elements[i].type!="button" && elementos.elements[i].type!="radio"){  //elementos.elements[i].type=="select"){
            elementos.elements[i].value="";           
        }         
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