<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $usuario = $result->fetch_assoc();
    } else {
        echo "Usuario no encontrado.";
        exit();
    }
}

if (isset($_POST['actualizar'])) {
    $id = intval($_POST['id']);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET 
                nombre='$nombre',
                apellido='$apellido',
                usuario='$usuario',
                email='$email'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: usuarios.php");
        exit();
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Usuario</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #eef6f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
form {
    background: white;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    text-align: center;
    width: 350px;
}
input {
    width: 90%;
    padding: 10px;
    margin: 8px 0;
}
button {
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
}
button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>

<form method="POST" action="">
    <h2>Editar Usuario</h2>
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
    <input type="text" name="apellido" value="<?php echo $usuario['apellido']; ?>" required>
    <input type="text" name="usuario" value="<?php echo $usuario['usuario']; ?>" required>
    <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>
    <button type="submit" name="actualizar">Guardar Cambios</button>
</form>

</body>
</html>