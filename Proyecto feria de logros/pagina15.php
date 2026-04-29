<?php
// Página de Novedades - Tecnozone (version actualizada con tus productos)
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

.producto h4 {
  margin: 10px 0 5px;
  font-size: 14px;
  color: #333;
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
      <label><input type="radio" name="marca"> AMD</label>
      <label><input type="radio" name="marca"> HP</label>
      <label><input type="radio" name="marca"> INTEL</label>
      <label><input type="radio" name="marca"> JBL</label>
      <label><input type="radio" name="marca"> LENOVO</label>
      <label><input type="radio" name="marca"> LOGIC</label>
      <label><input type="radio" name="marca"> XIAOMI</label>
      <label><input type="radio" name="marca"> XTECH</label>
      <label><input type="radio" name="marca"> LOGITECH</label>
    </div>
  </aside>

  <!-- Productos -->
  <section class="productos">
    <div class="titulo"><button>¡ZONA COMPUTO!</button></div>

    <div class="lista-productos">
      <div class="producto">
        <a href="pagina21.php"><img src="https://api.zonadigitalsv.com/storage/products/imagen_generada688ba6e7bc5f2.jpg" alt="Laptop Lenovo IdeaPad Slim 3"></a>
        <h4>Laptop Lenovo IdeaPad Slim 3 proc. AMD Ryzen 7 5825U</h4>
        <p><strong>Marca:</strong> LENOVO</p>
        <p class="precio">$400</p>
      </div>
      <div class="producto">
        <a href="pagina22.php"><img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68eace981f265.jpg" alt="Sistema de audio yx-s9865 con bluetooth"></a>
        <h4>Sistema de audio YX-S9865 con Bluetooth USB/SD/TF Control Remoto 60W+20W</h4>
        <p><strong>Marca:</strong> YX</p>
        <p class="precio">$250</p>
      </div>
      <div class="producto">
        <a href="pagina23.php"><img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68e140ac15b55.jpg" alt="Base de ventilacion para laptop"></a>
        <h4>Base de ventilación para laptop NOVA FHC78800 15.6p</h4>
        <p><strong>Marca:</strong> NOVA</p>
        <p class="precio">$14.85</p>
      </div>
      <div class="producto">
        <a href="pagina24.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/F1rX5oZonX6raAf3GnLGEfjpU86cboBkDO7zU1Vc.png" alt="Disco duro externo Seagate 20TB"></a>
        <h4>Disco duro externo Seagate 20TB Expansion STKP20000400 Desktop</h4>
        <p><strong>Marca:</strong> SEAGATE</p>
        <p class="precio">$300</p>
      </div>
      <div class="producto">
        <a href="pagina25.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/OrZjyYElOMal75AegC57aTOwDNVbNY0YmvMXFrcG.png" alt="Monitor ASUS TUF VG249Q3A"></a>
        <h4>Monitor ASUS TUF VG249Q3A FHD 23.8p 180Hz 1ms Fast IPS FreeSync HDMI DP</h4>
        <p><strong>Marca:</strong> ASUS</p>
        <p class="precio">$120</p>
      </div>
      <div class="producto">
        <a href="pagina26.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/IcucnWbmuWuIrGbsi2uEMQVRqYwWOz7ZWWC2FazL.png" alt="Estacion de carga Klip Xtreme KDC-700"></a>
        <h4>Estación de carga 7en1 Klip Xtreme KDC-700 65W USB-C x2 USB-A x2 AC x2 con pantalla</h4>
        <p><strong>Marca:</strong> KLIP XTREME</p>
        <p class="precio">$49.99</p>
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
>

