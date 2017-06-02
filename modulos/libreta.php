<? 
session_start();
if(!isset($_SESSION['nmbUsr'])){ header('location:registro.php');}
include_once('../funciones/paginacion-clientes.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../css/estilos-libreta.css">
  </head>
  <body>
   
   <div class="contenedor">
     <h1 class="logo"> Modulo de administración - Clientes</h1>
     <h3><? echo "Usuario: ".$_SESSION['nmbUsr'];?></h3>
     
  
  <fieldset>
    <legend>Libreta de Direcciones
    </legend>
     <form action="" class="libreta" method="post">
         
          <p><label for="">Grupo</label>
            <select name="tpcontacto" id="">
             <option value="">Clientes</option>
             <option value="">Proveedores</option>
             <option value="">Empleados</option>
             <option value="">Personal</option>
          </select>
         </p>
         <p><label for="">Nombre</label><input type="text" name="Nombre" ></p>
         <p><label for="">Apellidos</label><input type="text" name="Apellidos" ></p>
         <p><label for="">Correo</label><input type="text" name="Correo" > </p>        
         <p><label for="">Direccion</label><input type="text" name="Direccion" ></p>
         <p><label for="">Telefono Residencia</label><input type="text" name="Telefono" ></p>
         <p><label for="">Telefono Oficina</label><input type="text" name="Telefono" ></p>
         <p><label for="">Celular</label><input type="text" name="Telefono" > </p>      
         
         <div class="button">
          <input type="submit" value="Registrar" class="registrar-button"  >
          <input type="submit" value="Consultar" class="consultar-button"  >
          </div>
     </form>
    </div>
  </fieldset>
  </body>
</html>
