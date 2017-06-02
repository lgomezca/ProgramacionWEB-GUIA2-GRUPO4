<?
require_once('conexion-mysql.php');

//Función para consulta de registros en la base de datos
function listar() {
    $sql = "SELECT * FROM tbl_clientes";
    $recordset = mysql_query($sql);
    $numRegistros = mysql_num_rows($recordset);

    $tamanoPagina = 5;   
    $pagina = $_GET['pagina'];

    if(!$pagina){
        $inicio = 0;
        $pagina = 1;
    }else{
        $inicio = ($pagina-1)*$tamanoPagina;
    }

    $totalPaginas = ceil($numRegistros / $tamanoPagina);    

    $sql = "SELECT idcliente,
                   nombre, 
                   telefono, 
                   correo, 
                   comentarios                   
            FROM tbl_clientes
            ORDER BY idcliente 
            LIMIT ".$inicio.",".$tamanoPagina.";";
    $recordset = mysql_query($sql);
    
   //Paginacion de resultados de la consulta
    while ($row = mysql_fetch_array($recordset)) {        
        for($i=0; $i<4; $i++){
            echo "<td>".$row[$i]."</td>";
        }
        ?>
        <td><div id="content">
            <a href="javascript:mostrar( <? echo "'flotante".$row[0]."'"; ?> );">Ver</a>
            <div <? echo "id='flotante".$row[0]."'"; ?> style="display:none;" class="content2"> 
                <div <? echo "id='close".$row[0]."'"; ?>>
                    <a href="javascript:cerrar(<? echo "'flotante".$row[0]."'"; ?> );">cerrar</a>
                </div> 
                <?echo $row[4];?>
            </div>
        </td><tr>
        <?
    }    
    return $totalPaginas."-".$pagina;  
   
}

//Función para realizar paginación de resultados

function paginar($totalPaginas) {
   list($tpaginas, $pagina)= split('-',$totalPaginas);   
     
    if ($tpaginas > 1) {        
        if ($pagina != 1) {           
            echo "<a href='".$url."?pagina=".($pagina-1)."'><img src='../img/previous.gif' border='0'></a>";
        }
        for($i=1; $i<=$tpaginas;$i++) {                
            if ($pagina == $i) {                    
                echo "<span>".$pagina."</span>";              
            }else{                    
                echo "<a href='".$url."?pagina=".$i."'>".$i."</a>";
            }
        }            
        if ($pagina != $tpaginas) {                
            echo "<a href='".$url."?pagina=".($pagina+1)."'><img src='../img/next.gif' border='0'></a>";
        }
        
    }
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
    
    #content {
        width: 250px;
    }
    
    #close {
        float: right;
        font-weight: bold;
        color: red;
    }
    
    .content2 {
        margin: 0px auto;
        min-height: 100px;
        width: 250px;
        box-shadow: 0 2px 5px #666666;
        padding: 10px;
    }
    
</style>
<script languague="javascript">
    function mostrar(id) {
            div = document.getElementById(id);
            div.style.display = '';
        }
        
        function cerrar(id) {
            div = document.getElementById(id);
            div.style.display = 'none';
        }
</script>
</head>
<body>
    
</body>
</html>