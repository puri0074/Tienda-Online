<?php
// iniciamos con el lenguaje php

//creamos una clase para nuestra conexion a nuestro base de datos
//Trabajaremos con POO
class Database {
    //Agregamos propiedades
    //1. Direccion donde se encuentra nuestra base de datos
    private $hostname = "localhost";
    //Nombre de nuestra base de datos
    private $database = "tienda_online";
    //Usuario de nuestra base de datos
    private $username = "root";
    //Aqui ingresamos nuestra contraseña o si no la contraseña con la que ingresas en la base de datos, si es con XAMMP queda asi nada mas.
    private $password = "";
    private $charset = "utf8";
    //Son propiedades que nos ayudaran a conectar a nuestra base de datos

    //Creamos una funcion que se llama conectar
    function conectar()
    {
        //Definimos una variable y concatenamos todas las propiedades 
        $conexion "mysql:host=". $this->hostname . "; dbname=" . $this->database . ";
        charset=" . $this->charset;
        //agregamos opciones con PDO
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            //Es una configuracion para editar 
            PDO::ATTR_EMULATE_PREPARES => false
            ]
    }
}