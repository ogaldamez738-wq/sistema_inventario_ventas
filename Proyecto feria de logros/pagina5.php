<?php
// Aquí podrías incluir conexión o sesión si lo necesitas
// include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ofertas - Tecnozone</title>
<style>
:root {
  --celeste: #4da6ff;
  --celeste-hover: #1a8cff;
  --azul-oscuro: #0c1c35; 
  --fondo-claro: #f5f7fb;  
  --blanco: #ffffff;
}

/* ======== BASE ======== */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: var(--fondo-claro);
}

/* ======== HEADER ======== */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: var(--azul-oscuro);
  color: white;
  padding: 10px 20px;
  flex-wrap: wrap;
}

.logo {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo img { width: 35px; }

.logo a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: color 0.3s;
}

.logo a:hover { color: var(--celeste); }

.search-bar { flex: 1; text-align: center; }

.search-bar input {
  width: 60%;
  max-width: 500px;
  padding: 10px;
  border-radius: 25px;
  border: none;
  outline: none;
}

/* ======== ICONS HEADER ======== */
.icons { display: flex; gap: 10px; }

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
}

.navbar button:hover {
  background: var(--celeste-hover);
  transform: scale(1.05);
}

/* ======== CONTENIDO ======== */
.container {
  text-align: center;
  padding: 20px;
}

.oferta-banner {
  display: inline-block;
  background: var(--celeste);
  color: white;
  font-weight: bold;
  padding: 10px 25px;
  border-radius: 20px;
  font-size: 18px;
  margin: 20px 0;
}

.section-title {
  font-size: 20px;
  font-weight: bold;
  color: #000;
  margin: 10px 0 30px;
}

/* ======== PRODUCTOS ======== */
.productos {
  display: grid;
  grid-template-columns: repeat(4, 1fr); 
  gap: 20px;
  justify-items: center;
}

.product-card {
  background: var(--blanco);
  border-radius: 15px;
  width: 100%;
  max-width: 220px;
  text-align: center;
  padding: 15px;
  transition: 0.3s;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  position: relative;
  color: #000;
}

.product-card a {
  color: inherit;
  text-decoration: none; /* quitar subrayado */
  display: block;
}

.product-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 4px;
  background-color: var(--celeste);
  transition: width 0.3s ease;
}

.product-card:hover::before { width: 100%; }
.product-card:hover { transform: scale(1.05); }

.descuento {
  background: var(--celeste);
  color: white;
  font-size: 12px;
  font-weight: bold;
  padding: 3px 8px;
  border-radius: 10px;
  display: inline-block;
  margin-bottom: 8px;
}

.product-card img {
  width: 100%;
  height: 160px; 
  object-fit: cover;
  border-radius: 10px;
}

.product-name {
  font-size: 14px; 
  font-weight: bold;
  margin-top: 5px;
}

.marca {
  color: #0c1c35;
  font-size: 13px; 
  margin-bottom: 5px;
  font-weight: bold;
}

.precio {
  font-size: 16px;
  font-weight: bold;
  color: #0c1c35;
}

.precio-tachado {
  font-size: 13px;
  color: rgba(0,0,0,0.5);
  text-decoration: line-through;
}

/* ======== RESPONSIVO ======== */
@media (max-width: 1200px) { .productos { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 900px) { .productos { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px) { .productos { grid-template-columns: 1fr; } .navbar { flex-direction: column; } .navbar button { width: 90%; } }
</style>
</head>
<body>

<!-- HEADER -->
<header class="header">
  <div class="logo">
    <img src="logo.png" alt="Logo">
    <a href="pagina1.php">TECNOZONE</a>
  </div>
  <div class="search-bar">
    <input type="text" placeholder="Buscar productos...">
  </div>
  <div class="icons">
    <button class="icon" onclick="window.location.href='pagina9.php'">🛒</button>
    <button class="icon" onclick="window.location.href='registro.html'">👤</button>
  </div>
</header>

<!-- NAVBAR -->
<nav class="navbar">
  <button onclick="window.location.href='pagina3.php'">Categorías</button>
  <button onclick="window.location.href='pagina4.php'">Zona Gamer</button>
  <button onclick="window.location.href='pagina5.php'">Ofertas</button>
  <button onclick="window.location.href='pagina6.php'">Novedades</button>
  <button onclick="window.location.href='pagina7.php'">Marcas</button>
</nav>

<!-- CONTENIDO -->
<div class="container">
  <div class="oferta-banner">¡No te pierdas estas ofertas!</div>
  <div class="section-title">XIAOMI DEALS</div>

  <div class="productos">
    <!-- PRODUCTOS ORIGINALES, TODOS MANTENIDOS -->
    <div class="product-card">
      <div class="descuento">-29.3%</div>
      <a href="pagina63.php">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU4nVsruMXhqw72pZLeztEFj2xeRkCQVN9cw&s" alt="Xiaomi Tablet">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Tablet Xiaomi Redmi Pad SE 10.1"</div>
      </a>
      <div class="precio">$719.00 <span class="precio-tachado">$1,169.99</span></div>
    </div>
    
    <div class="product-card">
      <div class="descuento">-22.7%</div>
      <a href="pagina64.php">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5phIpTzcoFHKeYPZGhjlpJjNP_dCsk2mKkw&s" alt="Auriculares">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Auriculares TWS Bluetooth Redmi Buds 5 Pro</div>
      </a>
      <div class="precio">$69.95 <span class="precio-tachado">$95.95</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-23.1%</div>
      <a href="pagina65.php">
        <img src="https://buketomnisportpweb.s3.us-east-2.amazonaws.com/products-images/NWeezl4fIquSonCkMDkuF07zLM6MVgJRidY656Wj.jpeg" alt="Smartwatch">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Smartwatch Xiaomi Watch 3 Ivory</div>
      </a>
      <div class="precio">$84.95 <span class="precio-tachado">$119.95</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-12.0%</div>
      <a href="pagina66.php">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxYGuAQmptp0vj8D1wcEhsa25h_rh1LO4tZQ&s" alt="Teléfono">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Teléfono Xiaomi Redmi Note 14 Pro</div>
      </a>
      <div class="precio">$439.00 <span class="precio-tachado">$499.00</span></div>
    </div>

    <!-- SEGUIMOS PEGANDO TODOS LOS DEMÁS PRODUCTOS DEL CÓDIGO ORIGINAL -->
    <div class="product-card">
      <div class="descuento">-25.4%</div>
      <a href="pagina67.php">
        <img src="https://m.media-amazon.com/images/I/61-qQyUBjFL._AC_SL1500_.jpg" alt="Xiaomi Watch">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Smartwatch Redmi Watch 4</div>
      </a>
      <div class="precio">$109.00 <span class="precio-tachado">$149.00</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-30.0%</div>
      <a href="pagina68.php">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqeFQyK0Cb2Jv8tUb21uLD-N6dIBXUHBc4Tw&s" alt="Auriculares Pro">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Auriculares Redmi Buds 4 Pro</div>
      </a>
      <div class="precio">$69.99 <span class="precio-tachado">$99.99</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-15.3%</div>
      <a href="pagina69.php">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgfzIPAOXZ7zyKo35HUSzotMWXogVm05H-Xw&s" alt="Monitor Xiaomi">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Monitor Xiaomi 27" Gaming 165Hz</div>
      </a>
      <div class="precio">$249.99 <span class="precio-tachado">$299.99</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-20.0%</div>
      <a href="pagina70.php">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6KcP4dG7-6ncsEPpKLAFF-ay8IXRohtS-BA&s" alt="Powerbank">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Powerbank Redmi 20,000mAh Fast Charge</div>
      </a>
      <div class="precio">$39.99 <span class="precio-tachado">$49.99</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-18.5%</div>
      <a href="pagina71.php">
        <img src="https://xiaomistore.com.sv/wp-content/uploads/MI-360-Home-Security-Camera-2K-Pro-5226-4.webp" alt="Cámara Xiaomi">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Cámara de Seguridad Mi 360°</div>
      </a>
      <div class="precio">$49.99 <span class="precio-tachado">$61.99</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-24.0%</div>
      <a href="pagina72.php">
        <img src="https://http2.mlstatic.com/D_NQ_NP_794978-MPE92312705782_092025-O.webp" alt="Cargador Xiaomi">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Cargador Inalámbrico 30W</div>
      </a>
      <div class="precio">$29.99 <span class="precio-tachado">$39.99</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-22.8%</div>
      <a href="pagina73.php">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHK6UaNxK6I8KniI6e58SHwOc7A03-ZjwaPA&s" alt="Lámpara">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Lámpara Inteligente Mi Smart Lamp</div>
      </a>
      <div class="precio">$59.00 <span class="precio-tachado">$76.00</span></div>
    </div>

    <div class="product-card">
      <div class="descuento">-19.5%</div>
      <a href="pagina74.php">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMF_Y4N2imMd8ADD3jPsqId8eP4JIpj7355A&s" alt="Báscula Xiaomi">
        <div class="marca">XIAOMI</div>
        <div class="product-name">Báscula Inteligente Mi Scale 2</div>
      </a>
      <div class="precio">$34.99 <span class="precio-tachado">$43.50</span></div>
    </div>
  </div>
</div>

</body>
</html>
