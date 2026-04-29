<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tecnozone - Zona Gamer</title>
<style>
:root {
  --celeste: #3da8ff;
  --celeste-hover: #1a8cff;
  --azul-oscuro: #0c1c35;
  --gris-claro: #f4f4f4;
  --blanco: #f9f9f9;
}

/* ======== BASE ======== */
body { margin: 0; font-family: Arial, sans-serif; background-color: var(--blanco); overflow-x: hidden; }

/* ======== HEADER ======== */
header { display: flex; align-items: center; justify-content: space-between; background-color: var(--azul-oscuro); color: white; padding: 10px 20px; }

.logo { display: flex; align-items: center; gap: 10px; }
.logo img { width: 40px; }
.logo a { text-decoration: none; color: white; font-weight: bold; font-size: 18px; transition: color 0.3s; }
.logo a:hover { color: var(--celeste); }

.search-bar { flex: 1; margin: 0 20px; position: relative; }
.search-bar input { width: 100%; padding: 8px 12px; border-radius: 25px; border: none; outline: none; font-size: 14px; }

.icons { display: flex; gap: 15px; align-items: center; }
.icons a { color: white; text-decoration: none; font-size: 20px; }

/* ======== NAVBAR ======== */
nav { display: flex; gap: 10px; background-color: var(--gris-claro); padding: 10px; }
nav button { flex: 1; margin: 0 5px; background-color: var(--celeste); color: white; border: none; padding: 10px 0; border-radius: 20px; cursor: pointer; font-weight: bold; transition: 0.3s; }
nav button:hover { background-color: var(--celeste-hover); }

/* ======== CONTENIDO ======== */
.contenido { display: flex; padding: 20px; gap: 20px; }

/* ======== FILTROS ======== */
.filtros { background-color: var(--blanco); border-radius: 10px; padding: 15px; width: 220px; box-shadow: 0 0 8px rgba(0,0,0,0.1); flex-shrink: 0; }
.filtros h3 { background-color: var(--celeste); color: white; padding: 8px; border-radius: 5px; text-align: center; font-size: 16px; }
.filtros label { display: block; margin-top: 10px; font-weight: bold; color: #333; }
.filtros input[type="number"] { width: 100%; padding: 6px; margin-top: 5px; border-radius: 15px; border: 2px solid var(--celeste); outline: none; }
.filtros input[type="radio"] { margin-right: 6px; }
.filtros .marcas { background-color: #f6f6f6; border-radius: 8px; padding: 8px; margin-top: 10px; }
.filtros button { width: 100%; padding: 8px; margin-top: 10px; border: none; border-radius: 20px; background-color: var(--celeste); color: white; font-weight: bold; cursor: pointer; font-size: 14px; }
.filtros button:hover { background-color: var(--celeste-hover); }

/* ======== PRODUCTOS ======== */
.productos { flex: 1; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }

.producto { background-color: var(--blanco); border-radius: 10px; text-align: center; overflow: hidden; transition: transform 0.2s; box-shadow: 0 2px 6px rgba(0,0,0,0.1); padding: 10px; }

.producto:hover { transform: scale(1.03); }

.producto img { width: 100%; height: 280px; object-fit: cover; border-radius: 10px; transition: 0.3s; }

.producto h4 { padding: 5px 10px; color: #333; font-size: 15px; height: 45px; overflow: hidden; }

.producto .marca { font-size: 14px; color: #0c1c35; margin-bottom: 5px; display: block; font-weight: bold; }

.precio { font-weight: bold; color: var(--celeste); margin-bottom: 5px; display: block; }

/* ======== RESPONSIVO ======== */
@media (max-width: 900px) { .contenido { flex-direction: column; align-items: center; } .filtros { width: 90%; } .productos { grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); } }
@media (max-width: 600px) { nav { flex-direction: column; } nav button { margin: 5px 0; } }
</style>
</head>
<body>

<header>
  <div class="logo">
    <img src="logo.png" alt="Logo">
    <a href="pagina1.php"><strong>TECNOZONE</strong></a>
  </div>

  <div class="search-bar">
    <input type="text" placeholder="Buscar productos...">
  </div>

  <div class="icons">
    <a href="pagina9.php"><span>🛒</span></a>
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

<section class="contenido">
  <aside class="filtros">
    <h3>FILTROS</h3>
    <label>Min $</label>
    <input type="number" id="minPrecio" placeholder="0">
    <label>Max $</label>
    <input type="number" id="maxPrecio" placeholder="9999">
    <button onclick="filtrar()">Filtrar</button>
    <label>Marcas</label>
    <div class="marcas">
      <label><input type="radio" name="marca"> Asus</label>
      <label><input type="radio" name="marca"> AMD</label>
      <label><input type="radio" name="marca"> Corsair</label>
      <label><input type="radio" name="marca"> KingStone</label>
    </div>
  </aside>

  <div class="productos" id="productos">
    <div class="producto" data-precio="649.95" data-marca="AMD">
      <a href="pagina57.php">
        <img src="https://apizd.zonadigitalsv.com/storage/productos/QgEo1fsZMZGPaprMGpWn9yYgEr4Xk9XMbBzkn166.png" alt="PC Gamer Intel">
      </a>
      <h4>Combo de pc hidratacion ryzen 7 8700g</h4>
      <span class="marca">Marca: AMD</span>
      <span class="precio">$649.95</span>
    </div>

    <div class="producto" data-precio="1899.95" data-marca="Asus">
      <a href="pagina58.php">
        <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68d6d4179f337.jpg" alt="Laptop Asus ROG">
      </a>
      <h4>Laptop asus rog strix g713pv-ws94 proc.</h4>
      <span class="marca">Marca: Asus</span>
      <span class="precio">$1899.95</span>
    </div>

    <div class="producto" data-precio="2699.95" data-marca="Acer">
      <a href="pagina59.php">
        <img class="blanco" src="https://apizd.zonadigitalsv.com/storage/productos/Z4EH1gPZ0QIXE05GvLeUYPPKUvn3VtPes8nLWqdC.png" alt="Laptop Acer Predator">
      </a>
      <h4>Laptop acer predator helio neo</h4>
      <span class="marca">Marca: Acer</span>
      <span class="precio">$2699.95</span>
    </div>

    <div class="producto" data-precio="939.14" data-marca="MSI">
      <a href="pagina60.php">
        <img class="blanco" src="https://apizd.zonadigitalsv.com/storage/productos/mBZalrq4s0tBZrdZamoTViANJC8bsb5fkpPgG1TM.png" alt="Laptop MSI Thin">
      </a>
      <h4>Laptop msi thin 15 b13ve-3023us proc.</h4>
      <span class="marca">Marca: MSI</span>
      <span class="precio">$939.14</span>
    </div>

    <div class="producto" data-precio="1899.00" data-marca="Lenovo">
      <a href="pagina61.php">
        <img src="https://api.zonadigitalsv.com/storage/products/imagen_generada68e68c50803f1.jpg" alt="Laptop Lenovo LOQ">
      </a>
      <h4>Laptop lenovo loq proc.</h4>
      <span class="marca">Marca: Lenovo</span>
      <span class="precio">$1899.00</span>
    </div>

    <div class="producto" data-precio="3699.95" data-marca="MSI">
      <a href="pagina62.php">
        <img class="blanco" src="https://apizd.zonadigitalsv.com/storage/productos/26A7j49bYOf2lcwJXZIvnLyyDxoex4PlsXkgjGen.png" alt="Laptop MSI Vector">
      </a>
      <h4>Laptop msi vector 16 ai a2xwig proc.</h4>
      <span class="marca">Marca: MSI</span>
      <span class="precio">$3699.95</span>
    </div>
  </div>
</section>

<script>
function filtrar() {
  const min = parseFloat(document.getElementById('minPrecio').value) || 0;
  const max = parseFloat(document.getElementById('maxPrecio').value) || Infinity;

  const productos = document.querySelectorAll('.producto');

  productos.forEach(prod => {
    const precio = parseFloat(prod.dataset.precio);
    prod.style.display = (precio >= min && precio <= max) ? 'block' : 'none';
  });
}
</script>

</body>
</html>

