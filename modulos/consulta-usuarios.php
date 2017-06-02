<? 
session_start();
if(!isset($_SESSION['nmbUsr'])){ header('location:registro.php');}
include_once('../funciones/paginacion-usuarios.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../css/estilos-tabla.css">
  </head>
  <body>
   
   <div class="contenedor">
    <h1 class="logo">H.D. Solutions - Modulo de administración- Usuarios</h1>
  <h3><? echo "Usuario: ".$_SESSION['nmbUsr'];?></h3>
   <p>Consulta de usuarios registrados en la página web de la compañia.</p>
  <fieldset>
    <legend>Lista de Usuarios
    </legend>
    <table>
      <thead>
          <th>Login</th>
          <th>Clave</th>
          <th>Nombre</th>
          <th>Estado</th>
          <th>Correo</th>
          <th>Fecha Registro</th>                 
      </thead>
      <tbody>
      <? $tpaginas = listar(); ?>       
      </tbody>
    </table>
    <? paginar($tpaginas); ?>
    </div>
  </fieldset>
  </body>
</html>
