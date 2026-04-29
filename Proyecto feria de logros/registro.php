<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['Apellido'];
    $usuario = $_POST['nombre_de_usuario']; 
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios (nombre, apellido, usuario, email, password) 
            VALUES ('$nombre', '$apellido', '$usuario', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: bienvenida.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>