<?php
// Página de Novedades - Tecnozone (actualizada con productos del código de referencia)
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
        <a href="pagina51.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada64750fdedc35a.jpg" alt="Resma papel bond paperline tamaño carta">
        </a>
        <h3>Resma papel bond paperline tamaño carta...</h3>
        <p class="precio">$4.70 <span style="text-decoration:line-through;color:#888;">$5.99</span></p>
        
      </div>

      <div class="producto">
        <a href="pagina52.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68ed256c5dc4e.jpg" alt="Impresor multifuncional epson l4360 con ecotank wifi c11cl41301">
        </a>
        <h3>Impresor multifuncional epson l4360 con ecotank wifi c11cl41301...</h3>
        <p class="precio">$260.50 <span style="text-decoration:line-through;color:#888;">$300.95</span></p>
        
      </div>

      <div class="producto">
        <a href="pagina53.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68a78d2791b1c.jpg" alt="Escritorio gaming aerocool gd3-rgb 117x67x75cm tegd-4033011.11-af negro peso max 80kg">
        </a>
        <h3>Escritorio gaming aerocool gd3-rgb 117x67x75cm tegd-4033011.11-af negro peso max 80kg...</h3>
        <p class="precio">$144.50 <span style="text-decoration:line-through;color:#888;">$180.95</span></p>
        <p class="meta-precio">-20%</p>
      </div>

      <div class="producto">
        <a href="pagina54.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada661815793ab50.jpg" alt="Impresor multifuncional epson ecotank l14150 formato a3 wifi c11ch963">
        </a>
        <h3>Impresor multifuncional epson ecotank l14150 formato a3 wifi c11ch963...</h3>
        <p class="precio">$699.99 <span style="text-decoration:line-through;color:#888;">$800.50</span></p>
        
      </div>

      <div class="producto">
        <a href="pagina55.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada650a108c0d427.jpg" alt="Botella de tinta epson t49m120 negro 140ml sc-f570 f571 f170">
        </a>
        <h3>Botella de tinta epson t49m120 negro 140ml sc-f570 f571 f170...</h3>
        <p class="precio">$19.20 <span style="text-decoration:line-through;color:#888;">$24.90</span></p>
            </div>

      <div class="producto">
        <a href="pagina56.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada64750adf88d6b.jpg" alt="Calculadora casio fx-570es plus 2da gen">
        </a>
        <h3>Calculadora casio fx-570es plus 2da gen...</h3>
        <p class="precio">$20.50 <span style="text-decoration:line-through;color:#888;">$25.99</span></p>
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
