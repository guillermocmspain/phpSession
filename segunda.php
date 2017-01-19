<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
session_start();
$vuser = $_POST['user'];
$vpass = $_POST['pass'];


$server='localhost';
$user='root';
$password='';
$BD='pupils';

//sentencia sql

$sql="select count(*) from alumnos where usuario='$vuser' and password='$vpass';" ;



$con=mysqli_connect($server,$user,$password,$BD) or die('error conexión');

$sen=mysqli_query($con,$sql) or die('error en la sentencia: $sentencia');

//mysql_num_rows($sen,$val);
	

$vec=mysqli_fetch_row($sen);
if($vec[0]==1){
	
	echo"Usuario encontrado";
	
	$_SESSION['usuario'] = $vuser;
	$_SESSION['password'] = $vpass;
	echo"<br><a href='tercera.php'>Finalizar registro</a>";
	
}else{
	
	echo"Usuario no encontrado";
	echo"<br><a href='formu.html'>Volver</a>";
	}
	






?>
</body>
</html>