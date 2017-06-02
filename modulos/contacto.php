<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>HD Solutions</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun=1, minimum=1">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/estilos-contacto.css">
        <link rel="stylesheet" href="../css/fontello.css">
		<link rel="stylesheet" media="screen" href="../css/estilo_maps.css" >
        <!--Vinculación de archivo javascript-->
        <script src="../js/validacion-formulario.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="../Jquery/jquery-3.2.1.js"></script>  
		<script src="../js/jquery.gomap-1.3.2.min.js"></script>
    </head>
    <body>
     <header class="header">
      <div class="contenedor">
        <h1 class="logo">H.D. Solutions</h1>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="index.php" class="menu__link select">Inicio</a></li>
            <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
            <li class="menu__item"><a href="servicios.php" class="menu__link">Servicios</a></li>
            <li class="menu__item"><a href="clientes.php" class="menu__link">Clientes</a></li>
            <li class="menu__item"><a href="registro.php" class="menu__link ">Empleados</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="banner">
     <img src="../img/hdsolutions.jpeg" alt="">
      <div class="contenedor">
        <h2 class="banner__titulo">Contactanos</h2>
        <p class="banner__txt">
            Envianos tus preguntas o comentarios
            <? include_once('../funciones/contador.php');?> 
        </p>
      </div>
    </div>
    <main class="main">
      <div class="contenedor-contacto">
          <article class="info__columna__contacto">
                <form  class="formulario" id="registro"   onsubmit=" return validarCamposFormulario()">
                       <input type="text" id="Nombre" class="formulario__input" placeholder="Nombre" >
                       <input type="text" id="Telefono" class="formulario__input" placeholder="Telefono" >
                       <input type="email" id="Correo" class="formulario__input" placeholder="Correo Electronico"  >
                       <input type="text" id="Empresa" class="formulario__input" placeholder="Empresa" >
                       <select id="Servicio" class="formulario__input" onchange  =" verElementos(this.value); limpiarElementos(); validarElementos();" >
                            <option value="">Seleccione el tipo de servicio</option>
                            <option value="1">Captaciones</option>
                            <option value="2">Convenios de Recaudos y Pagos</option>
                            <option value="3">Plataforma de Caja</option>
                            <option value="4">Desarrollos a la medida</option>
                            <option value="5">Soporte y Mantenimiento</option>
                            <option value="6">Otros</option>
                      </select>
                       <textarea id="Comentarios" class="formulario__input" rows="8" cols="80" >
                       </textarea>
                       <input type="submit" id="submit" class="formulario__submit" onclick="crearNuevoRegistro()">
                </form>
<script>
      $(document).ready(function() {

        $("#mapa").goMap({
        
		    latitude:3.4052559,
			longitude:-76.5408343,
			zoom:15,
			maptype:"TERRAIN",
			scaleControl:true
			
         });

		 $.goMap.createMarker({
		    
			latitude:3.4052559,
			longitude:-76.5408343,
			title:"HD Solutions",
			html:{
			     content:"<h6>Cra 57 # 11A 50 - Cali</h6>",
				 popup:true
		        }
				 
		 });
				     
       });
	   
</script>
      <div class="banner__txt">
	    <h7>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Contactatanos en nuestra oficina</h7>
	  </div>
	  <div id= "mapa"></div>
          </div>
    </main>
    <footer class="footer">
      <div class="contenedor">
        <div class="social">
          <a href="#" class="icon-facebook"></a>
          <a href="#" class="icon-twitter"></a>
          <a href="#" class="icon-gplus"></a>
        </div>
        <p>Direccion: Cra 57 # 11 A 50. Cali - Celular 3052604849 -  Correo hd.solutions.sas@gmail.com </p>
        <p class="copy">&copy; H.D. Solutions derechos reservados </p>
      </div>
    </footer>
    <!--llamada a menu-->
    <script src="../js/menu.js"></script>
    </body>
</html>
