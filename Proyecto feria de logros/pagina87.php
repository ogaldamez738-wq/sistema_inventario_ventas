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
  grid-template-columns: repeat(3, 1fr);
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
  height: 180px;
  object-fit: contain;
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
  <img src="https://thunderbolt.com.ar/wp-content/uploads/2022/08/corsair_banner_web.jpg" alt="Banner Novedades">
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
    <div class="titulo-productos"><button>¡CORSAIR!</button></div>

    <?php
    $productos = [
      ["nombre"=>"Memoria RAM Corsair Vengeance LPX 16GB DDR4 3200MHz","precio"=>84.99,"marca"=>"CORSAIR","img"=>"https://www.impacto.com.pe/storage/products/md/174525166438065.webp","link"=>"pagina121.php"],
      ["nombre"=>"Fuente de poder Corsair RM750x 750W 80 Plus Gold","precio"=>129.99,"marca"=>"CORSAIR","img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIWmEET4nRNf6HHwzoJwczOyUkXKktEThaJw&s","link"=>"pagina122.php"],
      ["nombre"=>"Teclado mecánico Corsair K70 RGB MK.2","precio"=>159.99,"marca"=>"CORSAIR","img"=>"https://m.media-amazon.com/images/I/716-o5oFSjL.UF894,1000_QL80.jpg","link"=>"pagina123.php"],
      ["nombre"=>"Mouse gaming Corsair Dark Core RGB Pro","precio"=>79.99,"marca"=>"CORSAIR","img"=>"https://m.media-amazon.com/images/I/61cv5aWlTTL.UF894,1000_QL80.jpg","link"=>"pagina124.php"],
      ["nombre"=>"SSD Corsair MP600 Gen4 PCIe 1TB","precio"=>199.99,"marca"=>"CORSAIR","img"=>"https://m.media-amazon.com/images/I/81Uccbbk1OL.AC_SL1500.jpg","link"=>"pagina125.php"],
      ["nombre"=>"Disipador líquido Corsair H100i RGB Platinum","precio"=>119.99,"marca"=>"CORSAIR","img"=>"https://pcmig.com.mx/wp-content/uploads/2020/08/Corsair-H100i-RGB-Platinum-1.jpg","link"=>"pagina126.php"],
    ];
    ?>

    <?php foreach ($productos as $p): ?>
      <div class="producto">
        <a href="<?= $p['link'] ?>"><img src="<?= $p['img'] ?>" alt="<?= $p['nombre'] ?>"></a>
        <h4><?= $p['nombre'] ?></h4>
        <p><strong>Marca:</strong> <?= $p['marca'] ?></p>
        <p class="precio">$<?= number_format($p['precio'],2) ?></p>
      </div>
    <?php endforeach; ?>
  </section>
</div>

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