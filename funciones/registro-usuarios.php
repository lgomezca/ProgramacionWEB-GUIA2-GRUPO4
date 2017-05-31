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
             fecha
            ) 
            VALUES
            ('".$usuario."',
             '".$nombre."',
             '".$password."',           
             '".$email."',
             '".$fecha."'
            )";
    $recordset = mysql_query($sql) or die ('error en query');
}


/*--------------------------------------Definición de funciones--------------------------------------*/

function consultarUsuario($usuario, $password) {
  
    $sql = "SELECT login, clave, estado
            FROM tbl_usuarios
            WHERE login='".$usuario."'
            AND clave='".$password."'";            ;
    $recordset = mysql_query($sql) or die ('error en query');
    
    while ($row = mysql_fetch_array($recordset)) {
        if($row[0]!="" && $row[1]!=""){
            $_SESSION['nmbUsr'] = $row[0];
            $_SESSION['estUsr'] = $row[2];           
        }    
    }
    if($row[0]!=""){
        
        echo"<script languaje='javascript'>";
        echo"window.location='consultas.php'";
        echo"</script>";
        
        
    }else{
        echo "<center><br><font color='red'><b>".$msj="Usuario no registrado en la BD</b></font>";        
    }  
    
}

/*---------------------------------------------Llamado de funciones---------------------------------------------*/
 
if($_POST['usuario']!="" && $_POST['nombre']!="" && $_POST['correo']!="" && $_POST['passw']!="") {   
registrarUsuario($_POST['usuario'], $_POST['nombre'], $_POST['correo'],$_POST['passw'], $fecha);
}

if($_POST['usuario']!="" && $_POST['nombre']=="" && $_POST['correo']=="" && $_POST['passw']!="") {   
consultarUsuario($_POST['usuario'],$_POST['passw']);   
    
}
?>
