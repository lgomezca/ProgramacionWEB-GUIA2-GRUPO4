<?
session_start();
if(!isset($_SESSION['nmbUsr'])){ header('location:registro.php');}
?>
<!doctype html>
<html lang="en">
<head>
<META charset="utf-8">
<head>
</head>
<FRAMESET border=0 cols=* frameBorder=NO frameSpacing=0 rows=110,660,0>
<FRAME  noResize scrolling=no  name="fijo" src="menu.php">
<FRAME frameBorder=No name="dinamico" marginHeight=0 marginWidth=0 name=mainFrame scrolling=yes src="vista.php">
</FRAMESET>
</head>
</html>
