<?php
// Página de Novedades - Tecnozone (actualizada a Zona Redes)
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tecnozone - Zona Redes</title>
<style>
:root {
  --azul-oscuro: #0c1c35;
  --celeste: #4da6ff;
  --celeste-hover: #1a8cff;
  --blanco: #ffffff;
  --gris-fondo: #f5f7fb;
}

body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: var(--gris-fondo);
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
  height: 180px;
  object-fit: cover;
  border-radius: 10px;
}

.producto h3 {
  margin: 10px 0 5px;
  font-size: 14px;
  color: #333;
  min-height: 42px;
}

.precio {
  color: #0074d9;
  font-weight: bold;
  margin-top: 8px;
}

.meta-precio {
  margin-top: 4px;
  font-size: 12px;
  color: #ff5858;
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
    <a href="registro.html">👤</a>
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
      <label><input type="radio" name="marca"> Mercusys</label>
      <label><input type="radio" name="marca"> Cudy</label>
      <label><input type="radio" name="marca"> Xiaomi</label>
      <label><input type="radio" name="marca"> Ugreen</label>
      <label><input type="radio" name="marca"> Sprotek</label>
    </div>
  </aside>

  <!-- Productos -->
  <section class="productos">
    <div class="titulo"><button>¡ZONA REDES!</button></div>
    <div class="lista-productos">

      <div class="producto">
        <a href="pagina33.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68ead4942ae77.jpg" alt="Camara de videovigilancia inalambrica solar ipc-q911">
        </a>
        <h3>Camara de videovigilancia inalambrica solar ipc-q911...</h3>
        <p class="precio">$52.70 <span style="text-decoration:line-through;color:#888;">$60.99</span></p>
      </div>

      <div class="producto">
        <a href="pagina34.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68e533c5a74bc.jpg" alt="Tarjeta pci-e mercusys wifi dualband y bluetooth 5.0 ma30e ac1200">
        </a>
        <h3>Tarjeta pci-e mercusys wifi dualband y bluetooth 5.0 ma30e ac1200...</h3>
        <p class="precio">$12.50 <span style="text-decoration:line-through;color:#888;">$19.99</span></p>
      </div>

      <div class="producto">
        <a href="pagina35.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68e16f54e57ec.jpg" alt="Router multimode dualband cudy wr1300e ac1200 mu-mimo rj45 gigabite">
        </a>
        <h3>Router multimode dualband cudy wr1300e ac1200 mu-mimo rj45 gigabite...</h3>
        <p class="precio">$27.50 <span style="text-decoration:line-through;color:#888;">$34.95</span></p>
      </div>

      <div class="producto">
        <a href="pagina36.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68852339736d2.jpg" alt="Camara de videovigilancia wifi exteriores xiaomi bw500">
        </a>
        <h3>Camara de videovigilancia wifi exteriores xiaomi bw500 2.5k bateria recargable...</h3>
        <p class="precio">$69.99 <span style="text-decoration:line-through;color:#888;">$79.99</span></p>
      </div>

      <div class="producto">
        <a href="pagina37.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada685581a07af12.jpg" alt="Cable de red utp ugreen 80432 cat8 3mts">
        </a>
        <h3>Cable de red utp ugreen 80432 cat8 3mts 30awg hasta 40gbps a 2000mhz...</h3>
        <p class="precio">$5.20 <span style="text-decoration:line-through;color:#888;">$6.90</span></p>
      </div>

      <div class="producto">
        <a href="pagina38.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68559e184e4a6.jpg" alt="Tenaza ponchadora sprotek stc-7388 rj45 cat7 cat6 cat5">
        </a>
        <h3>Tenaza ponchadora sprotek stc-7388 rj45 cat7 cat6 cat5...</h3>
        <p class="precio">$14.50 <span style="text-decoration:line-through;color:#888;">$20.50</span></p>
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
    const precio = parseFloat(precioEl.textContent.replace('$','').split(' ')[0]);
    prod.style.display = (precio >= min && precio <= max) ? 'block' : 'none';
  });
});
</script>

</body>
</html>
