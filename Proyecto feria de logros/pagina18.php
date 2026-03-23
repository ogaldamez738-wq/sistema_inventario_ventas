<?php
// Página de Novedades - Tecnozone (actualizada con nuevos productos)
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tecnozone - Novedades</title>
<style>
:root {
  --azul-oscuro: #0c1c35;
  --celeste: #4da6ff;
  --celeste-hover: #1a8cff;
  --blanco: #ffffff;
  --gris-fondo: #f5f5f5;
}

body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: var(--blanco);
}

/* ===== HEADER ===== */
header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: var(--azul-oscuro);
  color: white;
  padding: 10px 20px;
  flex-wrap: wrap;
}

.logo {
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
  text-decoration: none;
  color: white;
}

.logo img {
  width: 35px;
}

.search-bar {
  flex: 1;
  text-align: center;
}

.search-bar input {
  width: 60%;
  padding: 10px;
  border-radius: 25px;
  border: none;
  outline: none;
  font-size: 14px;
  box-shadow: inset 0 1px 4px rgba(0,0,0,0.2);
}

.icons {
  display: flex;
  gap: 15px;
  align-items: center;
}

.icons a {
  color: white;
  text-decoration: none;
  font-size: 22px;
}

/* ===== NAVBAR ===== */
nav {
  display: flex;
  gap: 10px;
  background-color: var(--blanco);
  padding: 10px;
  justify-content: center;
  flex-wrap: wrap;
}

nav button {
  flex: 1;
  min-width: 120px;
  background-color: var(--celeste);
  color: white;
  border: none;
  padding: 10px;
  border-radius: 25px;
  font-weight: bold;
  cursor: pointer;
  transition: 0.3s;
}

nav button:hover {
  background-color: var(--celeste-hover);
}

/* ===== CONTENIDO PRINCIPAL ===== */
main {
  display: flex;
  background: var(--gris-fondo);
  padding: 20px;
  gap: 20px;
}

/* ===== SIDEBAR ===== */
.sidebar {
  width: 220px;
  background: var(--blanco);
  border-radius: 10px;
  padding: 15px;
  box-shadow: 0 0 5px rgba(0,0,0,0.1);
  height: fit-content;
}

.sidebar h3 {
  margin-top: 0;
  font-size: 18px;
  color: var(--azul-oscuro);
}

.sidebar label {
  display: block;
  margin: 8px 0 4px;
  font-size: 14px;
}

.sidebar input[type="text"] {
  width: 100%;
  padding: 8px;
  border-radius: 10px;
  border: 2px solid var(--celeste);
  outline: none;
  box-sizing: border-box;
}

.sidebar button {
  width: 100%;
  padding: 8px;
  border: none;
  border-radius: 10px;
  background: var(--celeste);
  color: white;
  font-weight: bold;
  cursor: pointer;
  margin-top: 10px;
}

/* ===== MARCAS ===== */
.sidebar .marcas {
  margin-top: 15px;
}

.sidebar .marcas label {
  display: flex;
  align-items: center;
  gap: 8px;
  margin: 5px 0;
}

/* ===== PRODUCTOS ===== */
.productos {
  flex: 1;
}

.titulo {
  text-align: center;
  margin-bottom: 20px;
}

.titulo button {
  background: var(--celeste);
  color: white;
  border: none;
  padding: 10px 25px;
  border-radius: 25px;
  font-weight: bold;
  font-size: 18px;
  cursor: default;
}

.lista-productos {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
  gap: 20px;
  justify-items: center;
}

.producto {
  background: var(--blanco);
  border-radius: 15px;
  text-align: center;
  padding: 15px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s;
  width: 250px;
}

.producto:hover {
  transform: scale(1.05);
}

.producto img {
  width: 100%;
  border-radius: 10px;
}

.producto h3 {
  margin: 10px 0 5px;
  font-size: 14px;
  color: #333;
}

.marca {
  font-size: 13px;
  color: #555;
}

.precio {
  color: #0074d9;
  font-weight: bold;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  main {
    flex-direction: column;
    align-items: center;
  }
  .sidebar {
    width: 90%;
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<header>
  <a href="pagina1.php" class="logo">
    <img src="logo.png" alt="Logo">
    <strong>TECNOZONE</strong>
  </a>

  <div class="search-bar">
    <input type="text" placeholder="Buscar productos...">
  </div>

  <div class="icons">
    <a href="pagina9.php">🛒</a>
    <a href="registro.html"><span>👤</span></a>
  </div>
</header>

<nav>
  <button onclick="window.location.href='pagina3.php'">Categorías</button>
  <button onclick="window.location.href='pagina4.php'">Zona Gamer</button>
  <button onclick="window.location.href='pagina5.php'">Ofertas</button>
  <button onclick="window.location.href='pagina6.php'">Novedades</button>
  <button onclick="window.location.href='pagina7.php'">Marcas</button>
</nav>

<main>
  <!-- Sidebar -->
  <aside class="sidebar">
    <h3>Filtros</h3>
    <label>Min $</label>
    <input type="text" placeholder="0" id="precio-min">
    <label>Max $</label>
    <input type="text" placeholder="1000" id="precio-max">
    <button id="filtrar-precio">Filtrar</button>

    <div class="marcas">
      <label><input type="radio" name="marca"> Xiaomi</label>
      <label><input type="radio" name="marca"> Roku</label>
      <label><input type="radio" name="marca"> Google</label>
      <label><input type="radio" name="marca"> Amazon</label>
      <label><input type="radio" name="marca"> TP-Link</label>
      <label><input type="radio" name="marca"> Fujifilm</label>
    </div>
  </aside>

  <!-- Productos -->
  <section class="productos">
    <div class="titulo"><button>¡ZONA ELECTRONICA!</button></div>

    <div class="lista-productos">
      <div class="producto">
        <a href="pagina39.php">
          <img src="https://apizd.zonadigitalsv.com/storage/productos/UFObPypiQTSLVgZ9OpJRMgQXrnPwLdGTqYGUJWf9.png" alt="Pantalla smart tv xiaomi a pro 55p">
        </a>
        <h3>Pantalla smart tv xiaomi a pro android tv 55p uhd qled 4k hdr l55ma-sph 56522</h3>
        <p class="marca">Marca: Xiaomi</p>
        <p class="precio">$470.70</p>
      </div>

      <div class="producto">
        <a href="pagina40.php">
          <img src="https://apizd.zonadigitalsv.com/storage/productos/vCxtiEVwdyaezoRpnHjhSIIpI6EAWYLXEUyDYgm8.png" alt="Roku streaming stick 4k hdr">
        </a>
        <h3>Roku streaming stick player tv 3830mx 4k hdr</h3>
        <p class="marca">Marca: Roku</p>
        <p class="precio">$48.50</p>
      </div>

      <div class="producto">
        <a href="pagina41.php">
          <img src="https://apizd.zonadigitalsv.com/storage/productos/qN81jkvsfQoW4YeLbPqpIDIscRSSnq4sLRXQzaEQ.png" alt="Bocina google nest mini">
        </a>
        <h3>Bocina con asistente de voz google nest mini ga00638-us</h3>
        <p class="marca">Marca: Google</p>
        <p class="precio">$25.50</p>
      </div>

      <div class="producto">
        <a href="pagina42.php">
          <img src="https://apizd.zonadigitalsv.com/storage/productos/ziItYsJwkffHSvdjllysy802jw95ZsqMrWX0K28c.png" alt="Amazon fire tv stick hd">
        </a>
        <h3>Amazon fire tv stick hd 1080p hdr con alexa control de voz</h3>
        <p class="marca">Marca: Amazon</p>
        <p class="precio">$36.99</p>
      </div>

      <div class="producto">
        <a href="pagina43.php">
          <img src="https://apizd.zonadigitalsv.com/storage/productos/bqDkwX1zVDrOotbiZPaRvALCvC5ywf4YiFRICoIJ.png" alt="Bombillo smart wi-fi tp-link">
        </a>
        <h3>Bombillo smart wi-fi led tp-link tapo l530e 800lm pack 2 unidades</h3>
        <p class="marca">Marca: TP-Link</p>
        <p class="precio">$12.20</p>
      </div>

      <div class="producto">
        <a href="pagina44.php">
          <img src="https://apizd.zonadigitalsv.com/storage/productos/hvksXbFbx3T6OdFZMo7xoDA9qSRGJVqWqJJdKpMZ.png" alt="Camara instantanea fujifilm">
        </a>
        <h3>Camara instantanea fujifilm instax mini 12 morado</h3>
        <p class="marca">Marca: Fujifilm</p>
        <p class="precio">$140.50</p>
      </div>
    </div>
  </section>
</main>

<script>
document.getElementById('filtrar-precio').addEventListener('click', function() {
  const min = parseFloat(document.getElementById('precio-min').value) || 0;
  const max = parseFloat(document.getElementById('precio-max').value) || Infinity;
  const productos = document.querySelectorAll('.producto');
  productos.forEach(prod => {
    const precioEl = prod.querySelector('.precio');
    if (!precioEl) return;
    const precio = parseFloat(precioEl.textContent.replace('$','').trim());
    prod.style.display = (precio >= min && precio <= max) ? 'block' : 'none';
  });
});
</script>

</body>
</html>
