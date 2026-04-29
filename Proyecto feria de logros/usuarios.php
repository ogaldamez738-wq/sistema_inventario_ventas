<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Usuarios Registrados</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f7f9fb;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 30px;
}
h1 {
    color: #007BFF;
}
table {
    width: 90%;
    border-collapse: collapse;
    margin-top: 25px;
    background: white;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
}
th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}
th {
    background-color: #007BFF;
    color: white;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
a.boton {
    text-decoration: none;
    color: white;
    background-color: #007BFF;
    padding: 6px 12px;
    border-radius: 5px;
    transition: background-color 0.3s;
}
a.boton:hover {
    background-color: #0056b3;
}
a.eliminar {
    background-color: #dc3545;
}
a.eliminar:hover {
    background-color: #b02a37;
}
.volver {
    margin-top: 25px;
}
.volver a {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
    transition: background-color 0.3s;
}
.volver a:hover {
    background-color: #218838;
}
</style>
<script>
function confirmarEliminacion(nombre) {
    return confirm("¿Seguro que deseas eliminar al usuario: " + nombre + "?");
}
</script>
</head>
<body>

<h1>Usuarios Registrados</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>

    <?php
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($fila = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$fila['id']}</td>
                    <td>{$fila['nombre']}</td>
                    <td>{$fila['apellido']}</td>
                    <td>{$fila['usuario']}</td>
                    <td>{$fila['email']}</td>
                    <td>
                        <a class='boton' href='editar.php?id={$fila['id']}'>Editar</a>
                        <a class='boton eliminar' href='eliminar.php?id={$fila['id']}' onclick='return confirmarEliminacion(\"{$fila['nombre']}\")'>Eliminar</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No hay usuarios registrados.</td></tr>";
    }
    $conn->close();
    ?>
</table>

<div class="volver">
    <a href="bienvenida.php">⬅ Volver a la página de bienvenida</a>
</div>

</body>
</html>