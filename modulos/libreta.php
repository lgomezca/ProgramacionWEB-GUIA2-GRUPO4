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
     <h1 class="logo"> H.D. Solutions - Modulo de administración - Libreta Direcciones</h1>
     <h3><? echo "Usuario: ".$_SESSION['nmbUsr'];?></h3>
     
  
  <fieldset class="contenedor-libreta">
    <legend>Libreta de Direcciones
    </legend>
     <form  action="" name="libreta" class="libreta" id="libreta" method="post">
         <div class="register-switch">
      <input type="radio" name="tpingreso" value="r" id="login" class="register-switch-input" checked onc onclick="verElementos(this.value);limpiarElementos()">
      <label for="login" class="register-switch-label">Registro Contacto</label>
      <input type="radio" name="tpingreso" value="c" id="register" class="register-switch-input" onclick=" verElementos(this.value);limpiarElementos()">
      <label for="register" class="register-switch-label">Consulta Contacto</label>
      
    </div>
          <p><label for="" class="registrar">Grupo</label>
            <select name="tpcontacto" id="" class="registrar">
            <option value=" "></option>
             <option value="1">Clientes</option>
             <option value="2">Proveedores</option>
             <option value="3">Empleados</option>
             <option value="4">Personal</option>
          </select>
         </p>
         <p><label for="" >Nombre</label><input type="text" name="Nombre" ></p>
         <p><label for="" class="registrar">Apellidos</label><input type="text" name="Apellidos" class="registrar"></p>
         <p><label for="" class="registrar">Correo</label><input type="text" name="Correo" class="registrar"> </p>        
         <p><label for="" class="registrar">Direccion</label><input type="text" name="Direccion" class="registrar"></p>
         <p><label for="" class="registrar">Telefono Residencia</label><input type="text" name="Telefonor" class="registrar"></p>
         <p><label for="" class="registrar">Telefono Oficina</label><input type="text" name="Telefonot" class="registrar"></p>
         <p><label for="" class="registrar">Celular</label><input type="text" name="Celular" class="registrar" limpiarElementos()> </p>      
         <div id="resultado"></div>
         <div id="consulta"></div>
         <div class="button">
          <input type="button" value="Registrar" class="registrar-button registrar" onclick="registrarDatos(); limpiarElementos()" >
          <input type="button" value="Consultar" class="consultar-button consultar " onclick="consultarDatos(); limpiarElementos()" >
          
          </div>
     </form>
    </div>
  </fieldset>
  </body>
  <script src="../js/validar-libreta.js"></script>
  <script language="JavaScript" src="../js/ajax.js"></script>  
</html>
