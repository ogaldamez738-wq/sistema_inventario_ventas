<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tecnozone</title>
  <style>
    :root {
      --azul-oscuro: #0c1c35;
      --celeste: #4da6ff;
      --fondo-claro: #f5f7fb;
      --azul-banner: #001b44;
    }

    body {
      margin: 0;
      font-family: "Segoe UI", Arial, sans-serif;
      background-color: var(--fondo-claro);
      color: #333;
      overflow-x: hidden;
    }

    /* HEADER */
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: var(--azul-oscuro);
      color: white;
      padding: 12px 25px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      width: 45px;
      border-radius: 8px;
    }

    .search-bar {
      flex: 1;
      margin: 0 25px;
      position: relative;
    }

    .search-bar input {
      width: 100%;
      padding: 10px 15px;
      border-radius: 30px;
      border: none;
      outline: none;
      font-size: 15px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .icons {
      display: flex;
      gap: 18px;
      align-items: center;
      font-size: 22px;
    }

    .icons a {
      color: white;
      text-decoration: none;
      transition: transform 0.2s ease;
    }

    .icons a:hover {
      transform: scale(1.1);
      color: var(--celeste);
    }

    /* NAV */
    nav {
      display: flex;
      gap: 10px;
      background-color: #f4f4f4;
      padding: 12px 20px;
      flex-wrap: wrap;
      justify-content: center;
      box-shadow: inset 0 -1px 0 rgba(0,0,0,0.05);
    }

    nav button {
      flex: 1;
      min-width: 120px;
      margin: 5px;
      background-color: var(--celeste);
      color: white;
      border: none;
      padding: 10px 0;
      border-radius: 25px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    nav button:hover {
      background-color: #1a8cff;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(77,166,255,0.4);
    }

    /* BANNER */
    .banner {
      position: relative;
      width: 100%;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      color: white;
      overflow: hidden;
      background: url('banner.jpg') center/cover no-repeat;
      cursor: pointer;
    }

    .banner::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.4);
      z-index: 1;
    }

    .banner-texto {
      position: relative;
      z-index: 2;
      text-align: center;
      padding: 0 20px;
      max-width: 800px;
    }

    .banner-texto h1 {
      font-size: 48px;
      font-weight: 800;
      color: #4da6ff;
      margin-bottom: 10px;
    }

    .banner-texto h2 {
      font-size: 26px;
      font-weight: 600;
      margin: 0;
      color: white;
      text-transform: uppercase;
    }

    .banner-texto p {
      color: #d1d5db;
      margin-top: 15px;
      font-size: 15px;
      line-height: 1.6;
    }

    /* PRODUCTOS */
    .productos {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 25px;
      padding: 40px 20px;
      background-color: var(--fondo-claro);
    }

    .producto {
      background-color: #ffffff;
      color: #333;
      border-radius: 16px;
      width: calc(33.33% - 20px);
      max-width: 300px;
      min-width: 230px;
      text-align: center;
      padding: 18px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      transition: all 0.3s ease;
      overflow: hidden;
    }

    .producto:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    }

    .producto img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      border-radius: 12px;
      transition: transform 0.3s ease;
    }

    .producto img:hover {
      transform: scale(1.05);
    }

    .producto h3 {
      font-size: 14px;
      margin-top: 12px;
      line-height: 1.4;
      color: #333;
    }

    .producto p {
      margin: 5px 0;
      font-size: 13px;
    }

    .producto .precio {
      color: #0074d9;
      font-weight: bold;
    }

    /* ZONAS */
    .zonas {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 48px;
      padding: 40px 20px 60px 20px;
      background: white;
    }

    .zona {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      text-decoration: none;
      color: #1a1a1a;
      width: 120px;
      transition: transform 0.25s ease, color 0.25s ease;
    }

    .zona img {
      width: 110px;
      height: 110px;
      object-fit: contain;
      margin-bottom: 8px;
      filter: drop-shadow(0 6px 14px rgba(0,0,0,0.12));
      transition: transform 0.25s ease;
    }

    .zona p {
      margin: 0;
      font-size: 15px;
      font-weight: 700;
      color: #1f6feb;
    }

    .zona:hover {
      transform: translateY(-6px);
    }

    .zona:hover img {
      transform: scale(1.04);
    }

    /* RESPONSIVE */
    @media screen and (max-width: 900px) {
      .producto { width: calc(50% - 20px); }
    }

    @media screen and (max-width: 600px) {
      header { flex-direction: column; text-align: center; }
      .search-bar { margin: 10px 0; }
      nav { flex-direction: column; }
      nav button { margin: 6px 0; }
      .producto { width: 100%; }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="Logo">
      <strong>TECNOZONE</strong>
    </div>

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
    <button onclick="window.location.href='pagina4.php'">Zona gamer</button>
    <button onclick="window.location.href='pagina5.php'">Ofertas</button>
    <button onclick="window.location.href='pagina6.php'">Novedades</button>
    <button onclick="window.location.href='pagina7.php'">Marcas</button>
  </nav>

  <!-- 🔗 Banner redirige a pagina87.php -->
  <section class="banner" onclick="window.location.href='pagina87.php'">
    <div class="banner-texto">
      <h2>Desata el rendimiento</h2>
      <h1>CORSAIR DDR5</h1>
      <p>Memorias de alto rendimiento con iluminación RGB personalizable.<br>
      Potencia tu PC con la velocidad y estilo que solo CORSAIR puede ofrecer.</p>
    </div>
  </section>

  <!-- Productos originales -->
  <section class="productos">
    <div class="producto">
      <a href="pagina10.php"><img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68e68c50803f1.jpg"></a>
      <h3>Laptop Lenovo LOQ i5 12450HX</h3>
      <p><strong>Marca:</strong> Lenovo</p>
      <p class="precio">$999.00</p>
    </div>
    <div class="producto">
      <a href="pagina11.php"><img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68dab4a947d32.jpg"></a>
      <h3>Laptop ThinkBook 14 i7 13700H</h3>
      <p><strong>Marca:</strong> Lenovo</p>
      <p class="precio">$1299.00</p>
    </div>
    <div class="producto">
      <a href="pagina12.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/TFlDDQ1CaLNXRbpcNntZYYLVf2PVYSQaBqz7wNCj.png"></a>
      <h3>Laptop HP Omnibook Ultra 5 120U</h3>
      <p><strong>Marca:</strong> HP</p>
      <p class="precio">$1099.00</p>
    </div>
    <div class="producto">
      <a href="pagina13.php"><img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68e533c5a74bc.jpg"></a>
      <h3>Tarjeta PCI-E Mercusys AC1200</h3>
      <p><strong>Marca:</strong> Mercusys</p>
      <p class="precio">$49.95</p>
    </div>
    <div class="producto">
      <a href="pagina14.php"><img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68e548e1c1518.jpg"></a>
      <h3>Headset inalámbrico Logitech</h3>
      <p><strong>Marca:</strong> Logitech</p>
      <p class="precio">$89.95</p>
    </div>
    <div class="producto">
      <a href="pagina15.php"><img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68e5368ef04bc.jpg"></a>
      <h3>Panel solar Nexxt 6W USB-C</h3>
      <p><strong>Marca:</strong> Nexxt</p>
      <p class="precio">$59.95</p>
    </div>
  </section>

  <!-- Íconos de zonas -->
  <section class="zonas">
    <a href="pagina15.php" class="zona"><img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png"><p>Zona Cómputo</p></a>
    <a href="pagina16.php" class="zona"><img src="https://pngimg.com/uploads/cpu/cpu_PNG50.png"><p>Zona Hardware</p></a>
    <a href="pagina17.php" class="zona"><img src="https://png.pngtree.com/png-vector/20240817/ourmid/pngtree-realistic-rectangular-wifi-router-with-two-antennas-png-image_13515666.png"><p>Zona Redes</p></a>
    <a href="pagina18.php" class="zona"><img src="https://png.pngtree.com/png-clipart/20240130/original/pngtree-network-protection-utp-cable-photo-png-image_14187841.png"><p>Zona Electrónica</p></a>
    <a href="pagina19.php" class="zona"><img src="https://intl.redmagic.gg/cdn/shop/files/20250820-210852.png"><p>Zona Móvil</p></a>
    <a href="pagina20.php" class="zona"><img src="https://png.pngtree.com/png-vector/20250530/ourmid/pngtree-compact-office-printer-with-paper-loaded-png-image_16417073.png"><p>Zona Home Office</p></a>
  </section>

  <!-- Más productos debajo -->
  <section class="productos">
    <div class="producto">
      <a href="pagina128.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/O9R3bFm2Y4oJKtTPf2ImC2oH1eDLUD6puCAtTAsJ.png"></a>
      <h3>Tarjeta de video msi ventus 3x rtx5080 16gb gddr7 oce g5080-16v3cw blanco</h3>
      <p><strong>Marca:</strong> MSI</p>
      <p class="precio">$1599.00</p>
    </div>
    <div class="producto">
      <a href="pagina129.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/UnXS3MvjFPLkBAFPdzH04zavRGVQyubtvNwSEwoC.png"></a>
      <h3>Teclado mecanico inalambrico 2.4ghz bluetooth redragon</h3>
      <p><strong>Marca:</strong> REDRAGON</p>
      <p class="precio">$84.95</p>
    </div>
    <div class="producto">
      <a href="pagina130.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/memTDsle5pepug03nysUNXtVNIzTK3w2LAzmudhZ.png"></a>
      <h3>Monitor Monitor xiaomi g pro 27i pantalla ips mini led 27p 2k 180hz </h3>
      <p><strong>Marca:</strong> XIAOMI</p>
      <p class="precio">$449.00</p>
    </div>
    <div class="producto">
      <a href="pagina131.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/DJPUYYAEij4TymSssMXuA4nW02cCIKEEdpw6vd28.png"></a>
      <h3>Consola de videojuegos xbox series s ssd 1tb vrr hdr blanco</h3>
      <p><strong>Marca:</strong> XBOX </p>
      <p class="precio">$499.00</p>
    </div>
    <div class="producto">
      <a href="pagina132.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/9yDiH5G0AkQh5AMJRNWJFYDIo3NC4fFpnYnMxIRz.png"></a>
      <h3>Consola nintendo switch2 bundle mkw pantalla fhd 7.9p hdr hasta 120hz almacenamiento 256gb sgp kb6ea</h3>
      <p><strong>Marca:</strong> NINTENDO</p>
      <p class="precio">$679.00</p>
    </div>
    <div class="producto">
      <a href="pagina133.php"><img src="https://apizd.zonadigitalsv.com/storage/productos/3pmvU30B9cisaSx3JBTtI8YZjXV27ATjt0mROFmt.png"></a>
      <h3>Consola sony playstation 5 slim edicion digital 4k hdr 1tb astro bot y gran turismo 7 </h3>
      <p><strong>Marca:</strong> SONY</p>
      <p class="precio">$700.00</p>
    </div>
  </section>
</body>
</html>
