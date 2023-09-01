<?php
require "vendor/autoload.php";
require_once 'src/db.php';
use GuzzleHttp\Client;

$client = new Client();

// Comprobar el método de solicitud HTTP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Método POST: Insertar un nuevo registro
    if (isset($_POST["peso"]) && isset($_POST["altura"])) {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        // Calcular el IMC
        $imc = $peso / ($altura * $altura);

        $query = "INSERT INTO imc (peso, altura, imc) VALUES ('$peso', '$altura', '$imc')";

        if ($conn->query($query) === TRUE) {
            echo "Registro insertado correctamente.";
        } else {
            echo "Error al insertar el registro: " . $conn->error;
        }
    } else {
        echo "Los campos de peso y altura son obligatorios.";
    }



} elseif ($_SERVER["REQUEST_METHOD"] == "PUT") {
    // Método PUT: Actualizar un registro existente
    parse_str(file_get_contents("php://input"), $_PUT);

    if (isset($_PUT["id"]) && isset($_PUT["peso"]) && isset($_PUT["altura"])) {
        $id = $_PUT["id"];
        $peso = $_PUT["peso"];
        $altura = $_PUT["altura"];

        // Calcular el nuevo IMC
        $imc = $peso / ($altura * $altura);

        $query = "UPDATE imc SET peso='$peso', altura='$altura', imc='$imc' WHERE id='$id'";

        if ($conn->query($query) === TRUE) {
            echo "Registro actualizado correctamente.";
        } else {
            echo "Error al actualizar el registro: " . $conn->error;
        }
    } else {
        echo "Los campos id, peso y altura son obligatorios.";
    }



} elseif ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    // Método DELETE: Eliminar un registro existente
    parse_str(file_get_contents("php://input"), $_DELETE);

    if (isset($_DELETE["id"])) {
        $id = $_DELETE["id"];

        $query = "DELETE FROM imc WHERE id='$id'";

        if ($conn->query($query) === TRUE) {
            echo "Registro eliminado correctamente.";
        } else {
            echo "Error al eliminar el registro: " . $conn->error;
        }
    } else {
        echo "El campo id es obligatorio.";
    }
} else {
    echo "Método no válido.";
}

$conn->close();
?>
