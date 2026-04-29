<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el usuario de la base de datos
    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Usuario eliminado correctamente.');
            window.location.href = 'usuarios.php';
        </script>";
    } else {
        echo "<script>
            alert('Error al eliminar el usuario: " . $conn->error . "');
            window.location.href = 'usuarios.php';
        </script>";
    }

    $conn->close();
} else {
    header("Location: usuarios.php");
    exit();
}
?>