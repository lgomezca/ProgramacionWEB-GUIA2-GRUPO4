<?
//Creamos la conexion con la Base de datos
$conexion= mysql_connect("localhost", "root", "adminmysql")or die("fallo en conexion con BD");
mysql_select_db("hdsolutions") or die('BD no encontrada');    

?>