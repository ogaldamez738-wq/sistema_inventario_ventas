<?php
// producto-headset-multiplataforma.php - versión individual con precio final $139.95
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Tecnozone - Headset Multiplataforma Inalámbrico 2.4Hz</title>
<style>
  body{margin:0;font-family:Arial,sans-serif;background-color:#fff;}
  header{display:flex;align-items:center;justify-content:space-between;background-color:#0c1c35;color:white;padding:10px 20px;}
  .logo{display:flex;align-items:center;gap:10px;cursor:pointer;}
  .logo img{width:40px;}
  .search-bar{flex:1;margin:0 20px;position:relative;}
  .search-bar input{width:100%;padding:8px 12px;border-radius:25px;border:none;outline:none;font-size:14px;}
  .icons{display:flex;gap:15px;align-items:center;}
  .icons a{color:white;text-decoration:none;font-size:20px;}
  nav{display:flex;gap:10px;background-color:#f4f4f4;padding:10px;}
  nav button{flex:1;margin:0 5px;background-color:#3da8ff;color:white;border:none;padding:10px 0;border-radius:20px;cursor:pointer;font-weight:bold;transition:.3s;}
  nav button:hover{background-color:#1a8cff;}
  .product-wrap{background-color:#f9f9f9;padding:40px 20px;}
  .product-card{max-width:1100px;margin:0 auto;background:#fff;border-radius:16px;box-shadow:0 10px 30px rgba(2,6,23,0.12);display:flex;gap:30px;padding:28px;align-items:stretch;}
  .product-media{flex:0 0 460px;max-width:460px;border-radius:12px;overflow:hidden;display:flex;align-items:center;justify-content:center;background:#efefef;}
  .product-media img{width:100%;height:auto;object-fit:cover;}
  .product-info{flex:1;display:flex;flex-direction:column;justify-content:space-between;}
  .meta{margin-bottom:8px;color:#6b6b6b;font-size:13px;}
  h1{margin:6px 0 10px;color:#0c1c35;font-size:28px;}
  .price{font-size:26px;color:#3da8ff;font-weight:700;margin-bottom:18px;}
  .desc{color:#333;font-size:15px;line-height:1.5;margin-bottom:22px;}
  .options{display:flex;gap:16px;align-items:center;margin-bottom:20px;flex-wrap:wrap;}
  .qty{display:flex;align-items:center;gap:8px;}
  .qty button{border:1px solid #ddd;background:#fff;padding:8px 10px;cursor:pointer;border-radius:8px;font-size:18px;}
  .qty input{width:60px;text-align:center;padding:8px;border-radius:8px;border:1px solid #ddd;font-size:15px;}
  .btn-add{background-color:#3da8ff;color:#fff;border:none;padding:12px 20px;border-radius:24px;font-weight:700;cursor:pointer;transition:background .2s;}
  .btn-add:hover{background-color:#1a8cff;}
  footer.small{text-align:center;padding:18px 0;color:#fff;background:#0c1c35;margin-top:30px;}
  .popup{position:fixed;top:0;left:0;width:100%;height:100%;display:flex;justify-content:center;align-items:center;background:rgba(12,28,53,0.55);opacity:0;pointer-events:none;transition:opacity .25s ease;z-index:9999;}
  .popup.show{opacity:1;pointer-events:auto;}
  .popup-box{background:#fff;border-radius:12px;padding:20px 26px;text-align:center;box-shadow:0 10px 40px rgba(2,6,23,0.2);max-width:360px;width:90%;}
  .popup-box h3{margin:0 0 6px;color:#0c1c35;font-size:18px;}
  .popup-box p{margin:0 0 12px;color:#444;font-size:14px;}
  .popup-box .btn-close{display:inline-block;padding:8px 14px;border-radius:10px;background:#3da8ff;color:#fff;border:none;cursor:pointer;font-weight:700;}
</style>
</head>
<body>

<header>
  <div class="logo" onclick="window.location.href='pagina1.php'">
    <img src="logo.png" alt="Logo">
    <strong>TECNOZONE</strong>
  </div>
  <div class="search-bar">
    <input type="text" placeholder="Buscar productos...">
  </div>
  <div class="icons">
    <a href="pagina9.php" title="Ver carrito">🛒</a>
    <a href="formulario.php" title="Mi cuenta">👤</a>
  </div>
</header>

<nav>
  <button onclick="window.location.href='pagina3.php'">Categorías</button>
  <button onclick="window.location.href='pagina4.php'">Zona gamer</button>
  <button onclick="window.location.href='pagina5.php'">Ofertas</button>
  <button onclick="window.location.href='pagina6.php'">Novedades</button>
  <button onclick="window.location.href='pagina7.php'">Marcas</button>
</nav>

<div class="product-wrap">
  <div class="product-card">
    <div class="product-media">
      <img id="prodImage" src="https://apizd.zonadigitalsv.com/storage/productos/bydUJaW0WTp0XCcQ63lU8ENTJNwjKmTkAyjCcMvx.png" alt="Headset Multiplataforma Inalámbrico 2.4Hz">
    </div>

    <div class="product-info">
      <div>
        <div class="meta">Accesorio • Gaming • Novedades</div>
        <h1 id="prodTitle">Headset Multiplataforma Inalámbrico 2.4Hz</h1>
        <div class="price" id="prodPrice">$139.95</div>

        <div class="desc" id="prodDesc">
          • Conexión inalámbrica 2.4GHz de baja latencia para juego competitivo.<br>
          • Compatibilidad multiplataforma: PC, PS5, Xbox, Switch y móviles.<br>
          • Sonido envolvente estéreo para una experiencia inmersiva.<br>
          • Micrófono integrado con cancelación de ruido.<br>
          • Almohadillas ergonómicas y diadema ajustable para uso prolongado.<br>
          • Batería de larga duración con hasta 20 horas de autonomía.<br>
          • Diseño ligero y cómodo, ideal para gaming y multimedia.
        </div>

        <div class="options">
          <div class="qty">
            <button type="button" id="decQty">−</button>
            <input type="number" id="cantidad" value="1" min="1">
            <button type="button" id="incQty">+</button>
          </div>
          <button class="btn-add" id="addToCart">Agregar al carrito 🛒</button>
        </div>

        <div class="extra">
          <strong>Envío:</strong> 3-5 días hábiles • <strong>Garantía:</strong> 1 año.
        </div>
      </div>
    </div>
  </div>
</div>

<div id="popup" class="popup">
  <div class="popup-box">
    <h3>Producto agregado al carrito</h3>
    <p>Se ha añadido correctamente al carrito.</p>
    <button class="btn-close" id="popupClose">Aceptar</button>
  </div>
</div>

<footer class="small">
  © 2025 Tecnozone - Todos los derechos reservados
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const decBtn = document.getElementById('decQty');
  const incBtn = document.getElementById('incQty');
  const qtyInput = document.getElementById('cantidad');
  const addBtn = document.getElementById('addToCart');
  const popup = document.getElementById('popup');
  const popupClose = document.getElementById('popupClose');

  decBtn.addEventListener('click', () => { let v = parseInt(qtyInput.value)||1; if(v>1) qtyInput.value=v-1; });
  incBtn.addEventListener('click', () => { let v = parseInt(qtyInput.value)||1; qtyInput.value=v+1; });

  popupClose.addEventListener('click', () => popup.classList.remove('show'));
  popup.addEventListener('click', e => { if(e.target===popup) popup.classList.remove('show'); });

  addBtn.addEventListener('click', () => {
    const nombre = document.getElementById('prodTitle').textContent.trim();
    const precio = parseFloat(document.getElementById('prodPrice').textContent.replace(/[^0-9.]/g,''))||0;
    const cantidad = parseInt(qtyInput.value)||1;
    const imagen = document.getElementById('prodImage').src;
    const producto = { nombre, precio, cantidad, imagen };

    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const existente = carrito.find(p => p.nombre === nombre);
    if (existente) existente.cantidad += cantidad; else carrito.push(producto);
    localStorage.setItem('carrito', JSON.stringify(carrito));

    popup.classList.add('show');
    setTimeout(()=>popup.classList.remove('show'),2200);
  });
});
</script>

</body>
</html>
