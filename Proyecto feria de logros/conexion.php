<?php
// 🔗 Conexión a la base de datos (usa este archivo en todos los PHP)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tecnozone";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>