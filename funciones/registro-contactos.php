<?
require_once('conexion-mysql.php');
date_default_timezone_set('America/Bogota');  
$fecha = date('Y-m-d');

/*--------------------------------registro de contactos-------------------------------*/

function registrarUsuario($cedula, $nombre, $telefono, $correo, $comentarios, $fecha) {

    $sql = "INSERT INTO tbl_clientes
            (idcliente,
             nombre,                            
             telefono,
             correo,
             comentarios
            ) 
            VALUES
            ('".$cedula."',
             '".$nombre."',                       
             '".$telefono."',
             '".$correo."',
             '".$comentarios."'
            )";
    $recordset = mysql_query($sql) or die ('error en query');
}
if($_POST['cedula'){
registrarUsuario($_POST['cedula'], $_POST['nombre'], $_POST['telefono'], $_POST['correo'], $_POST['comentarios'], $fecha);
}

?>
