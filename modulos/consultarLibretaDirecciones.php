<?
session_start();
if(!isset($_SESSION['nmbUsr'])){ header('location:registro.php');}
require_once('../funciones/conexion-mysql.php');

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<?

$nombreContacto = $_POST['nom'];



if($nombreContacto){
   
     $sql = "SELECT 
                 nombre,
                 apellidos,
                 Correo,
                 Teltrabajo,       
                 Telcasa,
                 celular,
                 tpcontacto,
                 direccion 
             FROM  tbl_libretadirecciones
            WHERE nombre = '".$nombreContacto."';
            ";
    $recordset = mysql_query($sql) or die ('error en query');
    
     while ($row = mysql_fetch_array($recordset)) {        
        //for($i=0; $i<5; $i++){
          ?>          <p>
              <label for="" class="consultar2" >Nombre</label>
              <input type="text" name="" class="consultar2" id="" value="<?echo $row[0];?>">
              <label for="" class="consultar2" >Apellidos</label>
              <input type="text" name="" class="consultar2" id="" value="<?echo $row[1];?>">
              <label for="" class="consultar2" >Correo</label>
              <input type="text" name="" class="consultar2" id="" value="<?echo $row[2];?>">
              <label for="" class="consultar2" >Telefono Oficina</label>
              <input type="text" name="" class="consultar2" id="" value="<?echo $row[3];?>">
              <label for="" class="consultar2" >Telefono Casa</label>
              <input type="text" name="" class="consultar2" id="" value="<?echo $row[4];?>">
              <label for="" class="consultar2" >Celular</label>
              <input type="text" name="" class="consultar2" id="" value="<?echo $row[5];?>">
             <label for="" class="consultar2" >Direccion</label>
              <input type="text" name="" class="consultar2" id="" value="<?echo $row[7];?>">
          </p>
          <?
       // }
        echo"<tr>";
        
    }  
     
}
?>
