<?php
// Página de Marcas - Tecnozone
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tecnozone - Marcas</title>
<style>
:root {
  --azul-oscuro: #0c1c35;
  --celeste: #4da6ff;
  --celeste-hover: #1a8cff;
  --blanco: #ffffff;
  --gris-fondo: #f5f5f5;
  --negro: #000000;
  --rojo: #c8102e;
  --verde-razer: #00ff99;
  --azul-asus: #007bff;
  --azul-logitech: #009ee2;
  --azul-hp: #0066b8;
  --gris-corsair: #444;
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

/* ===== SECCIÓN DE MARCAS ===== */
.section-header {
  background-color: var(--azul-oscuro);
  color: white;
  text-align: center;
  padding: 20px 10px;
  font-size: 18px;
  font-weight: bold;
  line-height: 1.4;
}

.marcas {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
  padding: 30px;
  background-color: var(--gris-fondo);
}

/* ===== TARJETAS DE MARCAS ===== */
.marca {
  border-radius: 15px;
  color: white;
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 260px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.2);
  transition: transform 0.3s;
  position: relative;
  overflow: hidden;
}

.marca:hover {
  transform: scale(1.05);
}

/* Imagen principal movida a la derecha */
.marca img.principal {
  width: 50%;
  height: 100px;
  object-fit: contain;
  position: absolute;
  top: 20px;
  right: 20px;
}

/* Imagen del logo a la izquierda */
.marca img.logo-marca {
  width: 90px;
  height: 90px;
  object-fit: contain;
  position: absolute;
  top: 20px;
  left: 20px;
}

/* Texto inferior */
.marca h2 {
  font-size: 20px;
  margin: 0;
  margin-top: auto;
  position: relative;
  z-index: 2;
}

.marca p {
  margin: 5px 0 10px;
  font-size: 14px;
  position: relative;
  z-index: 2;
}

/* ===== BOTONES ===== */
.marca button {
  background-color: var(--blanco);
  border: none;
  padding: 10px 20px;
  border-radius: 25px;
  font-weight: bold;
  cursor: pointer;
  align-self: start;
  transition: 0.3s;
  font-size: 14px;
  position: relative;
  z-index: 2;
}

.marca button:hover {
  background-color: rgba(255,255,255,0.8);
  transform: scale(1.05);
}

/* ===== COLORES DE MARCAS ===== */
.razer { background-color: var(--negro); color: var(--verde-razer); }
.razer button { color: var(--verde-razer); }

.asus { background-color: var(--azul-asus); }
.asus button { color: var(--azul-asus); }

.kingston { background-color: var(--rojo); }
.kingston button { color: var(--rojo); }

.logitech { background-color: var(--azul-logitech); }
.logitech button { color: var(--azul-logitech); }

.hp { background-color: var(--azul-hp); }
.hp button { color: var(--azul-hp); }

.corsair { background-color: var(--gris-corsair); }
.corsair button { color: var(--gris-corsair); }

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .search-bar input {
    width: 80%;
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

<section class="section-header">
  Las mejores marcas<br>para todos los gustos y necesidades
</section>

<section class="marcas">
  <div class="marca razer">
    <img src="https://www.pngplay.com/wp-content/uploads/13/Razer-Logo-Transparent-PNG.png" class="logo-marca" alt="Logo Razer">
    <img src="https://assets2.razerzone.com/images/pnx.assets/c459d1b979dc61c6c8e2778eec76a839/razer-corporate-program-2022-peripherals.png" class="principal" alt="Razer">
    <h2>RAZER</h2>
    <p>For Gamers. By Gamers<br>¡Empieza tu jugada!</p>
    <button onclick="window.location.href='pagina84.php'">Ver todos ➜</button>
  </div>

  <div class="marca asus">
    <img src="https://logos-world.net/wp-content/uploads/2020/07/Asus-Logo-1995-present.png" class="logo-marca" alt="Logo ASUS">
    <img src="https://www.claroshop.com/c/algolia/assets/portada/asus.webp" class="principal" alt="ASUS">
    <h2>ASUS</h2>
    <p>Potencia y estilo ASUS<br>¡Explora ahora!</p>
    <button onclick="window.location.href='pagina89.php'">Ver todos ➜</button>
  </div>

  <div class="marca kingston">
    <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/c/c0/Logo_Kingston_Technology.svg/2560px-Logo_Kingston_Technology.svg.png" class="logo-marca" alt="Logo Kingston">
    <img src="https://logg.api.cygnus.market/static/logg/Global/Memoria_RAM_Kingston_FURY_Beast_DDR4_RGB_8GB_3200MT_s_CL16/108c3bfb044a4a3f8aa3bf7b16c521cf.webp" class="principal" alt="Kingston">
    <h2>KINGSTON</h2>
    <p>Rendimiento y confiabilidad insuperable<br>¡Expande tus memorias!</p>
    <button onclick="window.location.href='pagina85.php'">Ver todos ➜</button>
  </div>

  <div class="marca logitech">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Logitech_logo.svg/1200px-Logitech_logo.svg.png" class="logo-marca" alt="Logo Logitech">
    <img src="https://www.cellmaxstore.com/cdn/shop/files/39_bca60181-eaec-4703-a916-505b0fee8705.png?v=1751149808&width=533" class="principal" alt="Logitech">
    <h2>LOGITECH</h2>
    <p>Pasión e innovación<br>¡Vive con estilo!</p>
    <button onclick="window.location.href='pagina107.php'">Ver todos ➜</button>
  </div>

  <div class="marca hp">
    <img src="https://cdn.freebiesupply.com/images/large/2x/hewlett-packard-logo-black-and-white.png" class="logo-marca" alt="Logo HP">
    <img src="https://www.hp.com/content/dam/sites/worldwide/personal-computers/commercial/workstations/ai-workstations/z-family-image-2-on-white-1@2x.png" class="principal" alt="HP">
    <h2>HP</h2>
    <p>Calidad y tecnología a tu alcance<br>¡Haz más con HP!</p>
    <button  onclick="window.location.href='pagina86.php'">Ver todos ➜</button>
  </div>

  <div class="marca corsair">
    <img src="https://cdn.freebiesupply.com/logos/large/2x/corsair-2-logo-black-and-white.png" class="logo-marca" alt="Logo Corsair">
    <img src="https://www.scphardstore.com/wp-content/uploads/FUENTE-CORSAIR-750W-RMX-SHIFT-80GOLD.png" class="principal" alt="Corsair">
    <h2>CORSAIR</h2>
    <p>Potencia y rendimiento extremo<br>¡Juega sin límites!</p>
    <button onclick="window.location.href='pagina87.php'" >Ver todos ➜</button>
  </div>
</section>

</body>
</html>

