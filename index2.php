<?php
$servername = "pru1"; // O la dirección del servidor MySQL
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_tu_base_de_datoss";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";

// Realizar operaciones con la base de datos aquí...

$conn->close(); // Cerrar la conexión
?>