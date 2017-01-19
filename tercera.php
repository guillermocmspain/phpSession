<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
session_start();

$server='localhost';
$user='root';
$password='';
$BD='pupils';

//sentencia sql

$sql="select apellidos from alumnos where usuario='$_SESSION[usuario]' ;" ;



$con=mysqli_connect($server,$user,$password,$BD) or die('error conexión');

$sen=mysqli_query($con,$sql) or die('error en la sentencia: $sentencia');

$vec=mysqli_fetch_row($sen);

echo"<p>Bienvenido $_SESSION[usuario]  apellidos es $vec[0]</p>";



?>

</body>
</html>