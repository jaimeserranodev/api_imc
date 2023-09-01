<?php
//incluyo el archivo de configuración para poder usar las variables que contiene
require_once __DIR__ . '/../config.php';

//creo la conexión a la base de datos usando las variables del archivo de configuración
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>