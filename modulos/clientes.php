<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
           <title>HD Solutions</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun=1, minimum=1">
        <link rel="stylesheet" href="../css/estilo_cliente.css">
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
            <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
            <li class="menu__item"><a href="servicios.php" class="menu__link">Servicios</a></li>
            <li class="menu__item"><a href="clientes.php" class="menu__link select ">Clientes</a></li>
            <li class="menu__item"><a href="registro.php" class="menu__link ">Empleados</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="banner">
     <img src="../img/hdsolutions.jpeg" alt="">
      <div class="contenedor">
        <h2 class="banner__titulo">Nuestros Clientes</h2>
        <p class="banner__txt">Actualmente los clientes a los cuales prestamos servicios de Mantenimiento y Soporte son
        <? include_once('../funciones/contador.php');?> 
        </p>
      </div>
    </div>
    <main class="main">
      <div class="contenedor">        
        <section class="servicios">
          <h2 class="section__titulo">Nuestros Clientes</h2>
          <div class="servicios__columna">
            <img src="../img/Bancoomeva.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Banco Coomeva</h2>
              <div class="servicios__txt">Bancoomeva era una cooperativa que en el 2.011 se constituyó como banco, actualmente prestamos servicios de mantenimiento y soporte 7x24 en los Modulos de Captaciones y Plataforma ( Ahorros, Cuenta corriente, CDT, caja ).
                  <a href="http://www.bancoomeva.com.co" >www.bancoomeva.com.co</a>
              
              </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/Pichincha.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Pichincha</h2>
              <div class="servicios__txt">Pichincha es un Banco Ecuatoriano al cual se le presta el servicio de soporte y mantenimiento en los Modulos de Plataforma y CDT
                  <a href="http://www.bancopichincha.com.co">www.bancopichincha.com.co</a>
              </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/Fincomercio.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Fincomercio</h2>
              <div class="servicios__txt">Fincomercio es una cooperativa de ahorro y credito con sede en Bogotá, para la cual se presenta el servicio de soporte y mantenimiento a los modulos de plataforma y Ahorros.
              <a href="http://www.fincomercio.com">www.fincomercio.com</a>
              </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/Promedico.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Promedico</h2>
              <div class="servicios__txt">Promedico es un Fondo de Empleados de Médicos, cuya sede principal esta en Cali, para la cual se presenta el servicio de soporte y mantenimiento a los modulos de plataforma y captaciones ( Ahorros, Cuenta corriente, CDT, caja ).
              <a href="http://www.promedico.com.co">www.promedico.com.co</a>
              </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/Comultrasan.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Comultrasan</h2>
              <div class="servicios__txt">Comultrasan es una financiera de ahorro y credito de la ciudad de Bucaramanga, para la cual se presenta el servicio de soporte y mantenimiento a los modulos de plataforma y captaciones ( Ahorros, Cuenta corriente, CDT, caja ).
              <a href="http://www.financieracomultrasan.com.co">www.financieracomultrasan.com.co</a>
              </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/Bancoomeva.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Coomeva Multiactiva</h2>
              <div class="servicios__txt">Coomeva Multiactiva es el grupo financiero de Coomeva. para la cual se presenta el servicio de soporte y mantenimiento a los modulos de plataforma. 
              <a href="http://www.coomeva.com.co">www.coomeva.com.co</a>
              </div>
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
