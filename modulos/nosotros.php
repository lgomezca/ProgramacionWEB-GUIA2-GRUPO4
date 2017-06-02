<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
           <title>HD Solutions</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun=1, minimum=1">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/fontello.css">
    </head>
    <body>
     <header class="header">
      <div class="contenedor">
        <h1 class="logo">H.D. Solutions</h1>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="index.php" class="menu__link ">Inicio</a></li>
            <li class="menu__item"><a href="nosotros.php" class="menu__link select ">Nosotros</a></li>
            <li class="menu__item"><a href="servicios.php" class="menu__link">Servicios</a></li>
            <li class="menu__item"><a href="clientes.php" class="menu__link ">Clientes</a></li>
            <li class="menu__item"><a href="registro.php" class="menu__link ">Empleados</a></li>
          </ul>
        </nav>
      </div>
    </header>
       <div class="banner">
     <img src="../img/nuestro_equipo.png" alt="">
      <div class="contenedor">
        <h2 class="banner__titulo">Nuestra empresa</h2>
        <p class="banner__txt">Cuentanos tu proyecto y te ayudaremos a realizarlo
        <? include_once('../funciones/contador.php');?>   
        </p>
      </div>
    </div>
    <main class="main">
      <div class="contenedor">
        <section class="servicios">
          <h2 class="section__titulo">Acerca de nosotros</h2>
            <p>Fundamos HD Solutions en el 2011 en respuesta a la creciente necesidad del mercado corporativo    de acceder a arquitecturas y servicios de tecnología de forma flexible.
             Desde entonces, 4 entusiastas inversionistas comenzaron a potenciar una estructura liviana que permitiera ofrecer arquitecturas de valor para los sistemas corporativos core de nuestros clientes, siempre con la premisa de la flexibilidad y la adaptabilidad a las cambiantes condiciones del mercado. A partir de entonces la historia de HD Solutions ha sido marcada por un crecimiento exponencial y reinvenciones de nuestro modelo de forma recurrente.

             </p>
          <div class="servicios__columna">
            <img src="../img/mision2.JPG" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Misión</h2>
              <div class="servicios__txt">Seguir experimentando cosas nuevas e innovadoras. Es por esto que estamos comprometidos a crear nuevos ecosistemas que potencien el negocio de nuestros clientes, haciéndonos una alternativa atractiva para el desarrollo de sus proyectos, mediante  la creación de soluciones sencillas y creativas. 

              </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/Vision2.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Visión</h2>
              <div class="servicios__txt">Para el año 2018 HD Solutions consolidará su estrategia de expansión en sus servicios de consultoría, implementación, outsourcing y capacitación en arquitectura orientada a servicios. También será reconocida a nivel nacional como proveedora de productos y servicios de ingeniería de software innovadores que transforman la manera de trabajar. </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/calidad.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Politica de Calidad</h2>
              <div class="servicios__txt">En HD Solutions proveemos servicios de Ingeniería de Software, Capacitación y Consultoría, comprometidos en crear soluciones innovadoras y alineadas a los requisitos de nuestros clientes con un alto nivel de satisfacción a través del mejoramiento continuo de los procesos y el desarrollo de nuestro capital humano.​</div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/posicionamiento.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Posicionamiento</h2>
              <div class="servicios__txt">HD Solutions ha prestado sus productos y servicios en diferentes empresas del sector financiero a novel nacional destacándose por sus altos estándares de calidad, logrando la satisfacción de sus clientes constituyendo así casos de éxito.</div>
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
        <p>Direccion: Cra 57 # 11 A 50. Cali - Celular 3052604849 -  Correo hd.solutions.sas@gmail.com </p>
        <p class="copy">&copy; H.D. Solutions derechos reservados </p>
      </div>
    </footer>
    <!--llamada a menu-->
    <script src="../js/menu.js"></script>
    </body>
</html>
