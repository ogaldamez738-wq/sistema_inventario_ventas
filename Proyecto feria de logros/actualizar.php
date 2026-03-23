<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario_id'])) {
    header("Location: registro.html");
    exit();
}

$id = $_SESSION['usuario_id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$sql = "UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: bienvenida.php"); // Redirige de nuevo a bienvenida
    exit();
} else {
    echo "Error al actualizar: " . $conn->error;
}

$conn->close();
?>
