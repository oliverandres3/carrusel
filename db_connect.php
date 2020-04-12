<?php

////conexio para MYSQL
/*
$servername = "mysql.hostinger.es";
$database = "u309565199_name";
$username = "u309565199_user";
$password = "comprahosting";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);*/
///FIN CONEXION A MYSQL
//CONEXION PARA POSTGRESQL
$user = 'postgres';
$passwd = 'weblog';
$db = 'slider';
$port = 5432;
$host = 'localhost';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
echo "Conexion exitosa <hr>"; 
pg_close($strCnx);

//FIN CONEXION PARA POSTGRESQ


?>