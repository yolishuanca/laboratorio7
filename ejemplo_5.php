<?php
//cadena de conexion al servidor y base de datos
   $connection = new mysqli("localhost","root","","yola");

if(!$connection){
   die("la conexion falló: ".$connection->connect_error);
}
echo "conectado exitosamente con objetos";

//cerrar la conexion
mysqli_close($connection);
?>