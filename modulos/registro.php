<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registro</title>
   <link rel="stylesheet" href="../css/style-ingreso.css">
   <link rel="stylesheet" href="../css/estilos_ingreso_banner.css">
       
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
            <li class="menu__item"><a href="index.php" class="menu__link ">Inicio</a></li>
            <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
            <li class="menu__item"><a href="servicios.php" class="menu__link">Servicios</a></li>
            <li class="menu__item"><a href="clientes.php" class="menu__link">Clientes</a></li>
            <li class="menu__item"><a href="#" class="menu__link select">Empleados</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="banner">
     <img src="../img/hdsolutions.jpeg" alt="">
      
    </div>
    <div class="form-usuarios">
    <center><h2 class="banner__titulo">Acceso Empleados</h2></center>
    <? include_once('../funciones/contador.php');?> 
      <h1 class="register-title">Bienvenido</h1>
      <form name="formIngreso" id="formulario-ingreso" class="register" method="POST" action="" onsubmit="return  validarElementos()">   
        <div class="register-switch">
          <input type="radio" name="tpingreso" value="l" id="login" class="register-switch-input" checked onc onclick="verElementos(this.value);limpiarElementos()">
          <label for="login" class="register-switch-label">Ingreso</label>
          <input type="radio" name="tpingreso" value="r" id="register" class="register-switch-input" onclick=" verElementos(this.value);limpiarElementos()">
          <label for="register" class="register-switch-label">Registro</label>
        </div>
        <input type="text" name="usuario" id="Usuario" class="register-input login reguser" placeholder="Usuario">
        <input type="text" name="nombre" id="Nombre" class="register-input registro reguser" placeholder="Nombre(s) y Apellido(s)">
        <input type="email" name="correo" id="Email" class="register-input registro reguser"  placeholder="Correo">
        <input type="password" name="passw" id="Password" class="register-input reguser login" placeholder="Clave">
        <input type="password" name="cfpassw" id="ConfirmarPassword" class="register-input registro reguser" placeholder="Confirmar Clave" onchange="validaConfPassword()" >   
        <input type="submit" value="Ingresar" class="register-button"  >
      </form>
  <? echo $msj; 
     include_once('../funciones/registro-usuarios.php');  
  ?>
  </div>
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
</body>
<script src="../js/validar-ingreso.js"></script>  
</html>
