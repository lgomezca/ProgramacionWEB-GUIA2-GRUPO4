<?
session_start();
if(!isset($_SESSION['nmbUsr'])){ header('location:registro.php');}
require_once('../funciones/conexion-mysql.php');

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<?

$nombreContacto = $_POST['nom'];
$apellidosContacto = $_POST['ape'];
$correoContacto = $_POST['email'];           
$telTrabajoContacto = $_POST['telt'];
$telCasaContacto = $_POST['telr'];
$celularContacto = $_POST['cel'];
$tpContacto = $_POST['tpc'];
$direccionContacto = $_POST['dir'];


if($nombreContacto){
   
     $sql = "INSERT INTO tbl_libretadirecciones
            (nombre,
             apellidos,
             Correo,
             Teltrabajo,       
             Telcasa,
             celular,
             tpcontacto,
             direccion
            ) 
            VALUES
            ('".$nombreContacto."',
             '".$apellidosContacto."',
             '".$correoContacto."',           
             '".$telTrabajoContacto."',
             '".$telCasaContacto."',
             '".$celularContacto."',
             '".$tpContacto."',
             '".$direccionContacto."'  
             
            );";
    $recordset = mysql_query($sql) or die ('error en query');
}
?>
