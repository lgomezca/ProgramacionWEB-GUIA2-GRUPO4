<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
           <title>HD Solutions</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun=1, minimum=1">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/fontello.css">
        <script>
            function quitarFrame() {
                if(self.parent.frames.length!=0)
                  self.parent.location=document.location.href;
            }
           quitarFrame();
        </script>  
    </head>
    <body>
     <header class="header">
      <div class="contenedor">
        <h1 class="logo">H.D. Solutions</h1>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="#" class="menu__link select">Inicio</a></li>
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
        <h2 class="banner__titulo">La mejor solución para tu empresa</h2>
        <p class="banner__txt">
            Cuentanos tu proyecto y te ayudaremos a realizarlo 
            <? include_once('../funciones/contador.php');?>        
        </p>
      </div>
    </div>
    <main class="main">
      <div class="contenedor">
        <section class="info">
          <article class="info__columna">
            <img src="../img/equipo.jpg">
            <h2 class="info__titulo">Equipo</h2>
            <p class="info__txt">Contamos con un equipo de profesionales altamente capacitados y avalados por una trayectoria de más de 20 años en cada una de sus especialidades.</p>
          </article>
          <article class="info__columna">
            <img src="../img/clientes2.jpeg" alt="" class="info__img">
            <h2 class="info__titulo">Clientes</h2>
            <p class="info__txt">Fruto de nuestra experiencia en la consultoría y desarrollo de software a la medida, son muchas las empresas y entidades que nos han otorgado su confianza y reconocimiento.</p>
          </article>
          <article class="info__columna">
            <img src="../img/servicioalcliente2.png" alt="" class="info__img">
            <h2 class="info__titulo">Atención al cliente</h2>
            <p class="info__txt">Nuestro objetivo es un cliente feliz. Queremos que nuestro Servicio sea el diferenciador que nos distinga en el Mercado.
             </p>
             <a href="contacto.php" class="contacto">Contacto</a>
          </article>
        </section>
        <section class="servicios">
          <h2 class="section__titulo">Nuestros servicios</h2>
          <div class="servicios__columna">
            <img src="../img/Consultoria-y-Capacitacion.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Captaciones</h2>
              <div class="servicios__txt">Facilita la administración de cuentas corriente, cuentas de ahorro y depósitos a término.
              
              </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/caja.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Convenios y Recaudo de pagos</h2>
              <div class="servicios__txt">Se facilita los pagos de impuestos y servicios públicos, asi como convenios empresariales. </div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/pagando-caja.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Plataforma de Caja</h2>
              <div class="servicios__txt">Administracion de Consignaciones, retiros, constitución de productos, transferencias, traslados de efectivo, cuadres de caja.</div>
            </div>
          </div>
          <div class="servicios__columna">
            <img src="../img/desarrollos.jpg" alt="" class="servicios__img">
            <div class="servicios__descripcion">
              <h2 class="servicios__titulo">Desarrollos a la medida</h2>
              <div class="servicios__txt">Análisis, diseño, desarrollo, implementación y soporte de soluciones .</div>
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
