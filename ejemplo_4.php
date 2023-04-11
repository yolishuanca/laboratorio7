<?php
//cadena de conexion al servidor y base de datos
   $connection = mysqli_connect("localhost","root","","yola");

if(!$connection){
   die("la conexion falló: ".mysqli_connect_errot());
}
echo "conectado exactamente con procedimientos";

//cerrar la conexion
mysqli_close($connection);
?>
