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
<!--Empezamos con html crear nuestra pagina y el titulo-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titulo de la pagina-->
    <title>Tienda Online</title>
    
     <!--Agregamos Bootstrap y css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <!--Aqui Agregamos codigos para la barra de navegacion -->
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <strong> Tienda Online</strong>
                </a>
                <!--Boton desplegable para dispositivos pequeños-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data--bs-target="#navbarHeader">
                    <!--icono del boton desplegable-->
                    <span class="navbar-toggler-icon"></span>
                    <button>
                        <!--Fin del boton desplegable-->

                    <!--Contenedor de la barra desplegable -->
                    <div class="collapse navbar-collapse" id="navHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Catalogo</a>
                        </li>
                        <!--Elemento de la barra de navegacion-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacto</a>
                    </li>
                    </ul>
                    <a href="carrito.php" class="btn btn-primary">Carrito</a>
                </div>
            </div>
        </div>
    </Header> 
    
</body>
</html>