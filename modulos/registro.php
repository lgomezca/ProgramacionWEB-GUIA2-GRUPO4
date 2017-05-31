<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="../css/style-ingreso.css">  
</head>
<body>
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
</body>
<script src="../js/validar-ingreso.js"></script>  
</html>
<? echo $msj; 
include_once('../funciones/registro-usuarios.php'); 
 
?>