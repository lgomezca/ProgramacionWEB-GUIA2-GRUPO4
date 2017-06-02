<?php
session_start();
session_is_registered('auttk') or die(header('location:ingreso.php'));
require_once('funciones/con_db_oracle_mdf.php');
require_once('funciones/conexion_bd_mysql.php');
require_once('funciones/condb2.php');
include_once('funciones/validarduplas.php');

?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<?php

$codigo = $_POST['cod'];
$asesor2=$_POST['asc'];
$term=$_POST['terminales'];
$terminal=$_POST['terminal'];
$nTicket=$_POST['tick'];


if($terminal!=''){
	
     $sql="SELECT terminal FROM tbl_gestion WHERE terminal='".trim($terminal)."'";  
     $rs=$conn->execute($sql);

     if($rs->fields[0]!=''){
       echo "la terminal ingresada ya fue solicitada";
     }

}
 
//consulta de asesores en BD_ORACLE
$rsAsesor=consultaAsesor($conn, $asesor2, $db);
    
 If($rsAsesor->fields[0]==""){
     echo "<FONT COLOR='RED'> El Asesor ingresado no existe en la BD de SEI</font>";
	 $flag=0;
    }
 Else{
     $flag=1;
    } 

        
  
If($codigo!='' and $flag==1){

    $sql="SELECT DISTINCT CJARCHV71.CRHAE.CRHCES, 
                          CJARCHV71.CRHAE.CRHNES, 
		                  CJARCHV71.CRHAE.CRHRAZ, 
		                  CJARCHV71.CRHAE.CRHDIR, 
		                  CJARCHV71.CJCIU.CIUDES, 
		                  CJARCHV71.CRHAE.CRHESA, 
		                  CJARCHV71.CRHAE.CRHNIT, 
		                  CJARCHV71.CRHAE.CRHCCE, 
		                  CJARCHV71.CRHAE.CRHCIU, 
		                  CJARCHV71.CRHAE.CRHNOR, 		
		                  CJARCHV71.CJRP.CRPNO1, 
		                  CJARCHV71.CJRP.CRPNO2, 
		                  CJARCHV71.CJRP.CRPAP1, 
		                  CJARCHV71.CJRP.CRPAP2,
		                  CJARCHV71.CRHAE.CRHCAC,
		                  CJARCHV71.CRHAE.CRHCMM
    FROM CJARCHV71.CRHAE LEFT JOIN CJARCHV71.CJCIU 
    ON CJARCHV71.CRHAE.CRHCIU = CJARCHV71.CJCIU.CIUCIU 
    LEFT JOIN CJARCHV71.CJRP 
    ON CJARCHV71.CRHAE.CRHCES = CJARCHV71.CJRP.CRPCES
    WHERE CJARCHV71.CRHAE.CRHCES= ".trim($codigo)." ORDER BY CRPNO1 DESC";
     //AND ((CJARCHV71.CJRP.CRPNO1)<>'')
	$rstSei=$db->execute($sql);

	//se verifica si el codigo unico existe en SEI
	if($rstSei->fields[0]!='' and $rstSei->fields[5]=='1'){

          if($rstSei->fields[15]<>'5966'){
	         
              if($rstSei->fields[7]<>0){
                 
	     $rsCodSol=verificaExisteCodigo($conn, $codigo);
         
		?>
	
<input type="hidden" name="ctr" <? if($rsCodSol->fields[0]!=''){ echo " value=".$rsCodSol->fields[0]; }?> >
<input type="hidden" name="cce" <? echo " value=".$rstSei->fields[7]; ?> >
<input type="hidden" name="cciu" <? echo " value=".$rstSei->fields[8]; ?> >
<input type="hidden" name="codindu" <? echo " value=".$rstSei->fields[14]; ?> >
<?
 validaduplas($codigo); 

?>


<p><LABEL >Asesor Afiliacion</LABEL><INPUT id="ascom" name="asesnam" type="text"  size="70" maxlength="70"  <? if($rstSei->fields[0]!=''){ echo " readonly value='".strtoupper(trim( utf8_encode($rsAsesor->fields[1])))."'"; }?> ></P> 

<p><LABEL><font color="#0B173B">Nombre</font></label><INPUT id="nombre" name="nombre" type="text" size=70 maxlength=65 onkeypress="return validar(event)" <? if($rstSei->fields[0]!=''){ echo " readonly value='".strtoupper(trim(utf8_encode($rstSei->fields[1])))."'"; }?>  ></p>
<p><LABEL>Razon Social</label><INPUT id="rzc" name="rzc" type="text"  size=70 maxlength=65 onkeypress="return validar(event)" <? if($rstSei->fields[0]!=''){ echo " readonly value='".trim(utf8_encode($rstSei->fields[2]))."'"; }?>></p>
<p><LABEL>Direccion</label><INPUT id="drc" name="drc" type="text"  size=70 maxlength=65 onkeypress="return validar(event)" <? if($rstSei->fields[0]!=''){ echo " readonly value='".trim($rstSei->fields[3])."'"; }?> ></p>
<p><LABEL>Nit</label><INPUT id="drc" name="nitc" type="text"       size=70 maxlength=65 onkeypress="return validar(event)" <? if($rstSei->fields[0]!=''){ echo " readonly value='".trim($rstSei->fields[6])."'"; }?> ></p>
<p><LABEL>Ciudad</label><INPUT id="cid" name="cid" type="text"  size=70 maxlength=65 onkeypress="return validar(event)" <? if($rstSei->fields[0]!=''){ echo "  readonly value='".strtoupper(trim($rstSei->fields[4]))."'"; } ?> > </p>
<p><LABEL >Rep Legal Nombre(s)</LABEL><INPUT id="nombre"  name="contact" type="text" size=70 maxlength=65               <? if($rstSei->fields[0]!='' and trim($rstSei->fields[10])!=""){ echo "  value='".strtoupper(trim(utf8_encode($rstSei->fields[10])))." ".strtoupper(trim(utf8_encode($rstSei->fields[11])))."'"; } elseIf($rsCodSol->fields[0]<>"" and trim($rstSei->fields[10])==""){ echo "  value='".strtoupper(trim(utf8_encode($rsCodSol->fields[2])))."'"; } ?> ></p>
<p><LABEL >Rep Legal Apellidos</LABEL><INPUT id="apellidos"  name="contactap" type="text" size=70 maxlength=65          <? if($rstSei->fields[0]!='' and trim($rstSei->fields[12])!=""){ echo "  value='".strtoupper(trim(utf8_encode($rstSei->fields[12])))." ".strtoupper(trim(utf8_encode($rstSei->fields[13])))."'"; } elseIf($rsCodSol->fields[0]<>"" and trim($rstSei->fields[13])==""){ echo "  value='".strtoupper(trim(utf8_encode($rsCodSol->fields[8])))."'"; }?> ></p>
<P><LABEL >Email</LABEL><INPUT id="txtEmailId" name="mail" type="email"  size=70 maxlength=65   onkeyup="if (/[^ÑñáéíóúÁÉÍÓÚàèìòùÀÈÌÒÙâêîôûÂÊÎÔÛÑñäëïöüÄËÏÖÜ]/g.test(this.value)) this.value = this.value.replace(/[ÑñáéíóúÁÉÍÓÚàèìòùÀÈÌÒÙâêîôûÂÊÎÔÛÑñäëïöüÄËÏÖÜ]/g,'')" <? if($rsCodSol->fields[0]!=''){ echo " readonly value='".$rsCodSol->fields[3]."' "; }?> required ></P>
<P><LABEL >Celular</LABEL><INPUT id="company" name="cel"  type="text" size="30" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  <? if($rsCodSol->fields[0]!=''){ echo " readonly value=".$rsCodSol->fields[1]; }?> required pattern="[0-9]{10}" 
title="El numero de celular debe tener 10 digitos."></P>


<?
$rsTpVta = ConsultaTipoVenta($conn);
?>

<p><LABEL for="website">Tipo venta</LABEL><SELECT id="website" name="tpvta" for="tpvta"  >

<?
echo "<option value= '' ></option>";

foreach($rsTpVta as $k => $item) {
		echo "<option value='".$item[0]."' >".$item[1]."</option>";
	}

?>

</SELECT></p> 

<P><LABEL for="tel">Num. Licencias</LABEL><INPUT id="name" name="nlin" type="text"  size=5 maxlength=3 onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"    onkeypress="return validar(event)" > </P>

<input type="hidden" name="MAX_FILE_SIZE" value="20000000" >
<p><label>Seleccione el archivo</label><input name="archivo" type="file" size='35'  ></p>
<P><INPUT id="submit" class="submit" value="Enviar" type="submit" onclick="javascript:ShowAlert(), envia_formulario()"></P>

<?
   }
   else{
     echo '<FONT COLOR="RED">Codigo Unico no tiene banco de abono.<br>';

   }

 }
 else{

echo '<FONT COLOR="RED">Codigo Unico no corresponde a ventas presenciales <br>';
            

 }

}//if ppal

else
{

echo '<FONT COLOR="RED">Codigo Unico no existen en SEI o se encuentra Inactivo.<br>';

}

}


?>
<head>
<script>
//No permite ingresar la ñ o Ñ
function coma(e) {
    tecla=(document.all) ? e.keyCode : e.which;
  //alert(tecla);
    if (tecla==241 || tecla==209) {
       
        return false;
    }
}
</script>
</head>






