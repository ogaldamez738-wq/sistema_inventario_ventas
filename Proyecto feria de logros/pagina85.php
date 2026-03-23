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
  <img src="https://statics.qloud.com.ar/noxie-store-08-2022/274_02-09-2022-08-09-14-kingstonbanner.jpg" alt="Banner Novedades">
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
    <div class="titulo-productos"><button>¡KINGSTON!</button></div>

    <?php
    $productos = [
      ["nombre"=>"Memoria RAM Kingston Fury Beast DDR4 16GB 3200MHz","precio"=>49.99,"marca"=>"KINGSTON","img"=>"https://techzone.com.sv/wp-content/uploads/2023/07/Diapositiva1-156.jpg","link"=>"pagina102.php"],
      ["nombre"=>"SSD Kingston NV2 NVMe PCIe 1TB","precio"=>69.99,"marca"=>"KINGSTON","img"=>"https://llego.com.gt/wp-content/uploads/ktc-product-ssd-snv2s-1000g-3-zm-lg.jpg","link"=>"pagina103.php"],
      ["nombre"=>"USB Kingston DataTraveler Exodia 128GB USB 3.2","precio"=>14.99,"marca"=>"KINGSTON","img"=>"https://www.rafenlinea.com/368-large_default/memoria-usb-kingston-128gb-32.jpg","link"=>"pagina104.php"],
      ["nombre"=>"Tarjeta microSD Kingston Canvas Select Plus 128GB","precio"=>12.50,"marca"=>"KINGSTON","img"=>"https://www.rafenlinea.com/383-large_default/tarjeta-micro-sd-de-128gb-.jpg","link"=>"pagina105.php"],
      ["nombre"=>"SSD Externo Kingston XS2000 1TB USB 3.2 Gen 2x2","precio"=>89.99,"marca"=>"KINGSTON","img"=>"https://promart.vteximg.com.br/arquivos/ids/8101028-1000-1000/image-1d6555313ab24692a1e49d14a7f45abe.jpg?v=638594399351900000","link"=>"pagina106.php"],
      ["nombre"=>"Memoria RAM Kingston Fury Renegade DDR5 32GB 6000MHz","precio"=>169.99,"marca"=>"KINGSTON","img"=>"https://cyccomputer.pe/51650-home_default/memoria-32gb-ddr5-kingston-fury-renegade-rgb-bus-6000mhz-pnkf560c32rsa-32.jpg","link"=>"pagina108.php"],
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