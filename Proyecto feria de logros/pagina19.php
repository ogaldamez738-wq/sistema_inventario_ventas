<?php
// Página de Novedades - Tecnozone (actualizada a Zona Móvil)
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tecnozone - Zona Móvil</title>
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
      <label><input type="radio" name="marca"> Maxell</label>
      <label><input type="radio" name="marca"> Oraimo</label>
      <label><input type="radio" name="marca"> Anker</label>
      <label><input type="radio" name="marca"> Genius</label>
      <label><input type="radio" name="marca"> Belkin</label>
      <label><input type="radio" name="marca"> Ugreen</label>
    </div>
  </aside>

  <!-- Productos -->
  <section class="productos">
    <div class="titulo"><button>¡ZONA MÓVIL!</button></div>
    <div class="lista-productos">

      <div class="producto">
        <a href="pagina45.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68ed2c02e3322.jpg" alt="Headset inalambrico bluetooth maxell maxpods hp-bt200 negro">
        </a>
        <h3>Headset inalambrico bluetooth maxell maxpods hp-bt200 negro...</h3>
        <p class="precio">$10.70 <span style="text-decoration:line-through;color:#888;">$15.99</span></p>
      </div>

      <div class="producto">
        <a href="pagina46.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68dd64c60466a.jpg" alt="Auricular tws bluetooth oraimo freepods neo otw-330s negro hasta 50h">
        </a>
        <h3>Auricular tws bluetooth oraimo freepods neo otw-330s negro hasta 50h...</h3>
        <p class="precio">$18.50 <span style="text-decoration:line-through;color:#888;">$20.95</span></p>
      </div>

      <div class="producto">
        <a href="pagina47.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68dc0add4abd1.jpg" alt="Cubo de carga 45w usb-c anker a2643j11 negro">
        </a>
        <h3>Cubo de carga 45w usb-c anker a2643j11 negro...</h3>
        <p class="precio">$14.50 <span style="text-decoration:line-through;color:#888;">$18.95</span></p>
      </div>

      <div class="producto">
        <a href="pagina48.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada67f186e32ce7d.jpg" alt="Tripode genius hasta 25cm ideal para webcam 16400">
        </a>
        <h3>Tripode genius hasta 25cm ideal para webcam 16400...</h3>
        <p class="precio">$3.99 <span style="text-decoration:line-through;color:#888;">$5.50</span></p>
  
      </div>

      <div class="producto">
        <a href="pagina49.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada664b7656a2f49.jpg" alt="Cable usb-a a lighting iphone belkin 1mt blanco caa001bt1mwh">
        </a>
        <h3>Cable usb-a a lighting iphone belkin 1mt blanco caa001bt1mwh...</h3>
        <p class="precio">$14.20 <span style="text-decoration:line-through;color:#888;">$15.90</span></p>
      </div>

      <div class="producto">
        <a href="pagina50.php">
          <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada67f46314f2407.jpg" alt="Cable usb tipo c macho macho ugreen us261 2m negro gris hasta 60w braided">
        </a>
        <h3>Cable usb tipo c macho macho ugreen us261 2m negro gris hasta 60w braided...</h3>
        <p class="precio">$5.50 <span style="text-decoration:line-through;color:#888;">$7.99</span></p>
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
