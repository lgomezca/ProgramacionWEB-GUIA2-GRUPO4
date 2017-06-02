<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>HD Solutions</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun=1, minimum=1">
  <link rel="stylesheet" href="../css/estilos_servicios.css">
  <link rel="stylesheet" href="../css/fontello.css">
  <script src="js/up_down.js"></script>
  <link rel="stylesheet" href="../css/totop.css">
  <link rel="stylesheet" href="../css/test.css">
</head>

<body>
  <header class="header">
      <div class="contenedor">
        <h1 class="logo">H.D. Solutions</h1>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="index.php" class="menu__link ">Inicio</a></li>
            <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
            <li class="menu__item"><a href="servicios.php" class="menu__link select">Servicios</a></li>
            <li class="menu__item"><a href="clientes.php" class="menu__link  ">Clientes</a></li>
            <li class="menu__item"><a href="registro.php" class="menu__link ">Empleados</a></li>
          </ul>
        </nav>
      </div>
    </header>
  <div class="banner">
    <img src="../img/fondo_servicios.jpg" alt="">
    <div class="contenedor">
      <h2 class="banner__titulo">Nuestros servicios</h2>
      <p class="banner__txt">
        El mejor soporte para tus decisiones
        <? include_once('../funciones/contador.php');?> 
      </p>
    </div>
  </div>
  <main class="main">
    <div class="contenedor">
      <section class="info">
        <article class="info__columna">
          <img src="../img/SFicon.png">
          <h2 class="info__titulo">Software Factory</h2>
          <p class="info__txt">Ofrecemos servicios para cada paso en el proceso de desarrollo de aplicaciones y facilidad de uso a través de una arquitectura ágil y eficiente.</p>
        </article>
        <article class="info__columna">
          <img src="../img/imagen_middleware.png" alt="" class="info__img">
          <h2 class="info__titulo">Middleware</h2>
          <p class="info__txt">H.D. Solutions tiene los especialistas que necesita; ofrecemos una gestión completa del ciclo de vida de aplicaciones de Oracle Application Server, Oracle Weblogic, JBOSS, GlassFish Server, y más.</p>
        </article>
        <article class="info__columna">
          <img src="../img/imagenbasededatos.png" alt="" class="info__img">
          <h2 class="info__titulo">Base de datos</h2>
          <p class="info__txt">Oracle, Microsoft SQL Server, MySQL, H.D. Solutions cubre la mayoría de las plataformas donde se hospeda la información crítica para su negocio..
        </article>
      </section>
      <section class="servicios">
        <h2 class="section__titulo">Como lo Hacemos</h2>
        <div class="servicios__columna">
          <img src="../img/Servicio1.png" alt="" class="servicios__img">
          <div class="servicios__descripcion_no_back">
            <h2 class="servicios__titulo"></h2>
            <div class="servicios__txt">
            </div>
          </div>
        </div>
        <div class="servicios__columna">
          <img src="../img/Servicio2.png" alt="" class="servicios__img">
          <div class="servicios__descripcion_no_back">
            <h2 class="servicios__titulo"></h2>
            <div class="servicios__txt"></div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <footer class="footer">
    <div class="contenedor">
      <div class="social">
        <a href="#" class="icon-facebook"></a>
        <a href="#" class="icon-twitter"></a>
        <a href="#" class="icon-gplus"></a>
      </div>
      <p>Direccion: Cra 57 # 11 A 50. Cali - Celular 3052604849 - Correo hd.solutions.sas@gmail.com </p>
      <p class="copy">&copy; H.D. Solutions derechos reservados </p>
    </div>
  </footer>
  <script src="../js/menu.js"></script>  
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="../js/up_down.js"></script>
  <div class="jquery-script-clear"></div>
  <div id="totopscroller"></div>
  <script>
    $(function(){
    $('#totopscroller').totopscroller({link:'index.html'});
    })
  </script>
</body>

</html>
