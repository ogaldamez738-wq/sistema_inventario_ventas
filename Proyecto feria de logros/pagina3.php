<?php
// Aquí podrías agregar la conexión o iniciar sesión PHP si es necesario
// include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tecnozone</title>
<style>
/* ======== VARIABLES ======== */
:root {
    --celeste: #4da6ff;
    --celeste-hover: #1a8cff;
    --azul-oscuro: #002b5c;
    --gris-borde: #cdd8e3;
    --blanco: #ffffff;
}

/* ======== ESTILOS GLOBALES ======== */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: var(--blanco);
}

/* ======== ENCABEZADO ======== */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--azul-oscuro);
    color: white;
    padding: 10px 20px;
    flex-wrap: wrap;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.logo {
    display: flex;
    align-items: center;
    font-weight: bold;
    font-size: 18px;
    text-decoration: none;
    color: white;
}

.logo img {
    width: 35px;
    margin-right: 10px;
}

.search-bar {
    flex: 1;
    text-align: center;
    min-width: 200px;
}

.search-bar input {
    width: 60%;
    max-width: 500px;
    padding: 10px;
    border-radius: 25px;
    border: none;
    outline: none;
    background: white;
    box-shadow: inset 0 1px 4px rgba(0,0,0,0.2);
}

.icons {
    display: flex;
    gap: 10px;
}

.icon {
    background: none;
    border: none;
    font-size: 24px;
    color: white;
    cursor: pointer;
}

/* ======== NAVBAR ======== */
.navbar {
    background: var(--blanco);
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 10px;
    gap: 10px;
}

.navbar button {
    flex: 1;
    background: var(--celeste);
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: bold;
    text-align: center;
    min-width: 120px;
    transition: 0.3s;
    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
}

.navbar button:hover {
    background: var(--celeste-hover);
    transform: scale(1.05);
}

/* ======== CONTENIDO PRINCIPAL ======== */
.main-content {
    display: flex;
    flex-wrap: wrap;
    background: var(--blanco);
}

/* ======== SIDEBAR ======== */
.sidebar {
    width: 220px;
    background: #f8f9fa;
    padding: 15px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar li {
    padding: 10px;
    cursor: pointer;
    border-radius: 6px;
    transition: 0.3s;
}

.sidebar li.active,
.sidebar li:hover {
    background: var(--gris-borde);
    font-weight: bold;
}

/* ======== SECCIÓN DE CATEGORÍAS ======== */
.content {
    flex: 1;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 20px;
    width: 100%;
    background: var(--blanco);
}

.category {
    background: white;
    border-radius: 12px;
    padding: 20px;
    width: 260px;
    margin: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.category:hover {
    transform: scale(1.03);
}

.category h3 {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--azul-oscuro);
}

.category ul {
    list-style: none;
    padding: 0;
}

.category li {
    margin: 6px 0;
}

/* ======== MODAL DE USUARIO ======== */
.modal {
    display: none;
    position: fixed;
    z-index: 10;
    left: 0; top: 0;
    width: 100%; height: 100%;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background: white;
    border-radius: 10px;
    margin: 10% auto;
    padding: 20px;
    width: 300px;
    text-align: center;
    position: relative;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

#closeModal {
    position: absolute;
    right: 10px; top: 5px;
    cursor: pointer;
    font-size: 18px;
}

.modal input {
    width: 90%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.modal button {
    background: var(--celeste);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

.modal button:hover {
    background: var(--celeste-hover);
}

/* ======== RESPONSIVE DESIGN ======== */
@media (max-width: 900px) {
    .sidebar {
        width: 100%;
        display: flex;
        overflow-x: auto;
    }

    .sidebar ul {
        display: flex;
        gap: 10px;
    }

    .sidebar li {
        flex-shrink: 0;
    }

    .content {
        justify-content: center;
    }
}

@media (max-width: 600px) {
    .header {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .search-bar input {
        width: 85%;
    }

    .navbar {
        flex-direction: column;
        align-items: center;
    }

    .navbar button {
        width: 90%;
    }

    .content {
        flex-direction: column;
        align-items: center;
    }

    .category {
        width: 90%;
    }
}
</style>
</head>
<body>

<!-- ======== ENCABEZADO ======== -->
<header class="header">
    <a href="pagina1.php" class="logo">
        <img src="logo.png" alt="Logo">
        <span>TECNOZONE</span>
    </a>

    <div class="search-bar">
        <input type="text" placeholder="Buscar productos...">
    </div>

    <div class="icons">
       <a href="pagina9.php"><span>🛒</span></a>

     <a href="registro.html"><span>👤</span></a>
    </div>
</header>

<!-- ======== MENÚ PRINCIPAL ======== -->
<nav class="navbar">
    <button>Categorías</button>
    <button onclick="window.location.href='pagina4.php'">Zona Gamer</button>
    <button onclick="window.location.href='pagina5.php'">Ofertas</button>
    <button onclick="window.location.href='pagina6.php'">Novedades</button>
    <button onclick="window.location.href='pagina7.php'">Marcas</button>
</nav>

<!-- ======== CONTENIDO ======== -->
<main class="main-content">
    <aside class="sidebar">
        <ul>
            <li class="active">Zona Gamer</li>
            <li onclick="window.location.href='pagina15.php'">Zona Computo</li>
            <li onclick="window.location.href='pagina16.php'">Zona Hardware</li>
            <li onclick="window.location.href='pagina17.php'">Zona Redes</li>
            <li onclick="window.location.href='pagina18.php'">Zona Electrónica</li>
            <li onclick="window.location.href='pagina19.php'">Zona Móvil</li>
            <li onclick="window.location.href='pagina20.php'">Zona Home Office</li>
        </ul>
    </aside>

    <section class="content">
        <div class="category">
        </div>

        <div class="category">
        </div>

        <div class="category">
        </div>
    </section>
</main>

<!-- ======== MODAL DE LOGIN ======== -->
<div id="userModal" class="modal">
    <div class="modal-content">
        <span id="closeModal">&times;</span>
        <h2>Iniciar Sesión</h2>
        <form action="conexion.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</div>

<script>
// ======== SCRIPT PARA MODAL ========
const userBtn = document.getElementById('userBtn');
const userModal = document.getElementById('userModal');
const closeModal = document.getElementById('closeModal');

userBtn.onclick = () => userModal.style.display = 'block';
closeModal.onclick = () => userModal.style.display = 'none';
window.onclick = (e) => { if (e.target == userModal) userModal.style.display = 'none'; };
</script>
</body>
</html>
