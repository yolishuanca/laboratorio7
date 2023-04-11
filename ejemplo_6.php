<?php

   try {
    $connection = new PDO("mysql:host=localhost;dbname=yola","root","");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conectado exitosamente con PDO";
   } catch (PDOException $e) {
       echo "la conexion falló: ".$e->getMessage();
   }
?>