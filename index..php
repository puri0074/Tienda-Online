<?php
//Llamamos a la base de datos en esta carpeta
require 'config/database.php';
//Aqui declaramos un objeto por que estamos trabajamos con un objeto y llamamos a la clase
$db = new Database();
//Definimos una variable
$con = $db->conectar();

//aqui traemos una  variable y lo llamamos SQL para nuestra consulta
$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
//Le decimos que se ejecute 
$sql->excute();
//Una vez ejecutado que nos de el resultado y llamaos a todos los productos de esta tabla.
$resultado = $sql->fetchaAll(PDO::FETCH_ASSOC);

?>