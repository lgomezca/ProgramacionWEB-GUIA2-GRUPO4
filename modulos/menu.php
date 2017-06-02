<?
session_start();
if(!isset($_SESSION['nmbUsr'])){ header('location:registro.php');}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Menu horizontal responsive</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="../css/estilos-menu.css">
    <link rel="stylesheet" href="../css/style-form-flat.css">
  </head>
  <body>
    <header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><img src="icono-menu2.png" alt=""></label>
        <nav class="menu">
          <ul>
            <li><a href="index.php" target="dinamico">Inicio</a></li>
            <li><a href="vista.php?pag=2" target="dinamico">Clientes</a></li>
            <li><a href="vista.php?pag=3" target="dinamico">Usuarios</a></li>
            <li><a href="vista.php?pag=5" target="dinamico">Libreta</a></li>    
            <li><a href="vista.php?pag=4">Salir</a></li>
          </ul>
        </nav>
    </header>
    </body>
    </html>