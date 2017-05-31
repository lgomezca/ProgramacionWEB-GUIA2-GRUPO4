<?
require_once('conexion-mysql.php');
date_default_timezone_set('America/Bogota');  
$fecha = date('Y-m-d');

/*--------------------------------------Definición de funciones--------------------------------------*/

function registrarUsuario($usuario, $nombre, $email, $password, $fecha) {
  
    $sql = "INSERT INTO tbl_usuarios 
            (login,
             nombre,
             clave,
             correo,
             estado, 
             fecha
            ) 
            VALUES
            ('".$usuario."',
             '".$nombre."',
             '".$email."',
             '".$email."', 
             '".$password."',
             '".$fecha."'
            )";
    $recordset = mysql_query($sql) or die ('error en query');
}

/*---------------------------------------------Llamado de funciones---------------------------------------------*/
 
if($_POST['usuario']!="" && $_POST['nombre']!="" && $_POST['correo']!="" && $_POST['passw']!="") {   
registrarUsuario($_POST['usuario'], $_POST['nombre'], $_POST['correo'],$_POST['passw'], $fecha);
}

?>
