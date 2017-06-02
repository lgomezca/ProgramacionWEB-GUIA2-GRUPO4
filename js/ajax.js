function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function registrarDatos(){
    //donde se mostrará el resultado
	divResultado = document.getElementById('resultado');
	//tomamos el valor de la lista desplegable
	nombrec = document.libreta.Nombre.value;    
    apellidosc=document.libreta.Apellidos.value;
    correoc = document.libreta.Correo.value;    
    direccionc=document.libreta.Direccion.value;
    telefonorc = document.libreta.Telefonor.value;    
    telefonotc=document.libreta.Telefonot.value;
    celularc=document.libreta.Celular.value;
    tpcontactoc=document.libreta.tpcontacto.value;
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el metodo POST
	//archivo que realizará la operacion
	//datoscliente.php
	ajax.open("POST", "registroLibretaDirecciones.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("nom="+nombrec+"&ape="+apellidosc+"&email="+correoc+
              "&dir="+direccionc+"&telr="+telefonorc+"&telt="+telefonotc+
              "&cel="+celularc+"&tpc="+tpcontactoc)

}


function consultarDatos(){
    //donde se mostrará el resultado
	divResultado = document.getElementById('consulta');
	//tomamos el valor de la lista desplegable
	nombrec = document.libreta.Nombre.value;   
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el metodo POST
	//archivo que realizará la operacion
	//datoscliente.php
	ajax.open("POST", "consultarLibretaDirecciones.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("nom="+nombrec)

}





