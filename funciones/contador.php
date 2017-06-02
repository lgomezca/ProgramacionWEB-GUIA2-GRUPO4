<?
$x=file('../contador.data');
$y=$x[0];


if($_COOKIE['conteo']==1){
    echo"<p align='center'><font color='white'><b>Eres el visitante No. ".$y."<b></font></p>"; 
}else{
    $y=$y+1;
    $conteo = fopen('../contador.data','w');
    fwrite($conteo,$y);
    fclose($conteo);
    setcookie('conteo','1');
    echo"<p align='center'><font color='white'><b>Eres el visitante No. ".$y."<b></font></p>"; 
}



?>