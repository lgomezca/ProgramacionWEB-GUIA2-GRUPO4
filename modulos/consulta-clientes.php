<? 
session_start();
if(!isset($_SESSION['nmbUsr'])){ header('location:registro.php');}
include_once('../funciones/paginacion-clientes.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../css/estilos-tabla.css">
  </head>
  <body>
   
   <div class="contenedor">
     <h1 class="logo">H.D. Solutions - Modulo de administración - Clientes</h1>
     <h3><? echo "Usuario: ".$_SESSION['nmbUsr'];?></h3>
     <p>Consulta de Clientes registrados en la pagina de la compañia.</p>
  
  <fieldset>
    <legend>Lista de Clientes
    </legend>
    <table>
      <thead>
          <th>Cedula</th>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Comentarios</th>                  
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
