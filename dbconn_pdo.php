<!-- acceso a base de datos a través de PDO(PHP Data Ojects)  -->
<?php
$darabaseHost = 'localhost';
$darabaseName = 'registro_db';
$darabaseUsername = 'root';
$darabasePassword = '';

$conn = mysqli_connect($darabaseHost,$darabaseUsername,$darabasePassword,$darabaseName);

if(!$conn)
die("<script>alert ('Error de conexión!.')</script")

?>