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
      <div class="titulo"><button>¡Novedades!</button></div>

      <?php
      $productos = [
        [
          "nombre" => "Bolso Organizador Hombro Klip Xtreme Sam KTS-500\"",
          "precio" => 27.95,
          "marca" => "KLIP XTREME",
          "img" => "https://api.zonadigitalsv.com/storage/products/imagen_generada68f2746252d03.jpg",
          "link" => "pagina75.php"
        ],
        [
          "nombre" => "Bolso Organizador Riñonera Klip Xtreme Isa KFP-550",
          "precio" => 24.95,
          "marca" => "KLIP XTREME",
          "img" => "https://api.zonadigitalsv.com/storage/products/imagen_generada68f270de447ab.jpg",
          "link" => "pagina76.php"
        ],
        [
          "nombre" => "Dispensador Inteligente de Agua y Alimento Nexxt",
          "precio" => 129.95,
          "marca" => "NEXXT",
          "img" => "https://api.zonadigitalsv.com/storage/products/imagen_generada68f26d584bc9c.jpg",
          "link" => "pagina77.php"
        ],
        [
          "nombre" => "Cámara de Videovigilancia Inalámbrica Nexxt",
          "precio" => 59.95,
          "marca" => "NEXXT",
          "img" => "https://api.zonadigitalsv.com/storage/products/imagen_generada68f26b72a1c20.jpg",
          "link" => "pagina78.php"
        ],
        [
          "nombre" => "Presentador Inalámbrico Klip Xtreme SlideMaster",
          "precio" => 34.95,
          "marca" => "KLIP XTREME",
          "img" => "https://api.zonadigitalsv.com/storage/products/imagen_generada68f269d649c73.jpg",
          "link" => "pagina79.php"
        ],
        [
          "nombre" => "Teclado Inalámbrico Bluetooth Logitech K250",
          "precio" => 19.95,
          "marca" => "LOGITECH",
          "img" => "https://api.zonadigitalsv.com/storage/products/imagen_generada68f2677e44cad.jpg",
          "link" => "pagina80.php"
        ],
        [
          "nombre" => "Combo de PC Gamer Ryzen 5 5600X + B550M + RTX",
          "precio" => 999.95,
          "marca" => "AMD",
          "img" => "https://apizd.zonadigitalsv.com/storage/productos/WPvAVq3yEebF7O7J58PNUgj5aZPoOOWsDz5fnSxt.png",
          "link" => "pagina81.php"
        ],
        [
          "nombre" => "Motherboard Gigabyte Z890 Eagle LGA1851 DDR5 WiFi 7",
          "precio" => 329.95,
          "marca" => "GIGABYTE",
          "img" => "https://api.zonadigitalsv.com/storage/products/imagen_generada68f0284ddba10.jpg",
          "link" => "pagina82.php"
        ],
        [
          "nombre" => "Cable hdmi macho macho ugreen hd118 1.5mts braided 40409",
          "precio" => 5.95,
          "marca" => "UGREEN",
          "img" => "https://api.zonadigitalsv.com/storage/products/imagen_generada68ee7d82e666c.jpg",
          "link" => "pagina83.php"
        ],
      ];
      ?>

      <div class="lista-productos">
        <?php foreach ($productos as $p): ?>
          <div class="producto">
            <a href="<?= $p['link'] ?>">
              <img src="<?= $p['img'] ?>" alt="<?= $p['nombre'] ?>">
            </a>
            <h4><?= $p['nombre'] ?></h4>
            <p><strong>Marca:</strong> <?= $p['marca'] ?></p>
            <p class="precio">$<?= number_format($p['precio'],2) ?></p>
            
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

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

