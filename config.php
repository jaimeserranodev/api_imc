<?php
$host = "127.0.0.1";
$username = "root";
$password = "123456";
$database = "velites_db";


$conn = new mysqli($host, $username, $password, $database);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL de ejemplo
$sql = "SELECT * FROM imc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Procesar los resultados
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - IMC: " . $row["imc"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
