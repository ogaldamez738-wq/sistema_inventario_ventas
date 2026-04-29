<?php
// Página de Novedades - Tecnozone
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

/* ===== BANNER ===== */
.titulo-imagen img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  border-radius: 0;
  margin-bottom: 20px;
}

/* ===== CONTENIDO PRINCIPAL ===== */
.main-contenedor {
  display: flex;
  gap: 20px;
  padding: 20px;
  background: var(--gris-fondo);
}

/* ===== SIDEBAR ===== */
.sidebar {
  width: 220px;
  background: var(--blanco);
  border-radius: 10px;
  padding: 15px;
  box-shadow: 0 0 5px rgba(0,0,0,0.1);
  height: fit-content;
  text-align: left;
  flex-shrink: 0;
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
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 3 productos por fila */
  gap: 20px;
}

.producto {
  background: var(--blanco);
  border-radius: 15px;
  text-align: center;
  padding: 15px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s;
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

.titulo-productos {
  grid-column: 1 / -1;
  text-align: center;
  margin-bottom: 20px;
}

.titulo-productos button {
  background: var(--celeste);
  color: white;
  border: none;
  padding: 10px 25px;
  border-radius: 25px;
  font-weight: bold;
  font-size: 18px;
  cursor: default;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
  .productos {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .main-contenedor {
    flex-direction: column;
    align-items: center;
  }
  .sidebar {
    width: 90%;
  }
  .productos {
    grid-template-columns: 1fr;
    width: 100%;
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

<!-- Banner -->
<div class="titulo-imagen">
  <img src="https://www.maxgaming.se/dokument/bibliotek/Image/MaxGaming/Brands/razer/brandpage/razer-brandpage-maxgaming2.png" alt="Banner Novedades">
</div>

<!-- Contenedor principal -->
<div class="main-contenedor">
  <!-- Filtro -->
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
    <div class="titulo-productos"><button>¡RAZER!</button></div>

    <?php
    $productos = [
      ["nombre"=>"Headset bluetooth razer kraken kitty\"","precio"=>99.95,"marca"=>"RAZER","img"=>"https://apizd.zonadigitalsv.com/storage/productos/c51445v58OZsAzccIiVmS9r3Ps6QDEy9bNlvmFIo.png","link"=>"pagina88.php"],
      ["nombre"=>"Silla profesional razer iskur v2","precio"=>449.00,"marca"=>"RAZER","img"=>"https://apizd.zonadigitalsv.com/storage/productos/mReG7iGqKbEwBqVkaMbu73yW962O1clyK7j1yTVb.png","link"=>"pagina90.php"],
      ["nombre"=>"Headset multiplataforma inalambrico 2.4hz","precio"=> 139.95,"marca"=>"RAZER","img"=>"https://apizd.zonadigitalsv.com/storage/productos/bydUJaW0WTp0XCcQ63lU8ENTJNwjKmTkAyjCcMvx.png","link"=>"pagina91.php"],
      ["nombre"=>"Teclado mecanico usb razer blackwidow v4 75%","precio"=>159.95,"marca"=>"RAZER","img"=>"https://apizd.zonadigitalsv.com/storage/productos/4kxaeHC0FGIyPTfC7LZ7uR3zxpgbjaiaXzPRT1xI.png","link"=>"pagina92.php"],
      ["nombre"=>"Headset usb razer kraken v4 x rgb minecraft pc ","precio"=>99.95,"marca"=>"RAZER","img"=>"https://apizd.zonadigitalsv.com/storage/productos/bC4XOSoxsK4X0nOhxA3YpWmk07eOaW7ObPEpJMdI.png","link"=>"pagina93.php"],
      ["nombre"=>"Sistema de audio razer leviathan v2 rgb","precio"=>259.00,"marca"=>"RAZER","img"=>"https://api.zonadigitalsv.com/storage/products/imagen_generada648b5ca8d335b.jpg","link"=>"pagina94.php"],
    ];
    ?>

    <?php foreach ($productos as $p): ?>
      <div class="producto">
        <a href="<?= $p['link'] ?>"><img src="<?= $p['img'] ?>" alt="<?= $p['nombre'] ?>"></a>
        <h4><?= $p['nombre'] ?></h4>
        <p><strong>Marca:</strong> <?= $p['marca'] ?></p>
        <p class="precio">$<?= number_format($p['precio'],2) ?></p>
        <!-- Botón "Ver más" eliminado -->
      </div>
    <?php endforeach; ?>
  </section>
</div>

<script>
// Filtrar por precio
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
