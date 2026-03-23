<?php
// producto-monitor-xiaomi-27.php - Página individual del Monitor Xiaomi 27" Gaming 165Hz
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tecnozone - Monitor Xiaomi 27" Gaming 165Hz</title>
  <style>
    body{margin:0;font-family:Arial,sans-serif;background-color:#fff;overflow-x:hidden;}
    header{display:flex;align-items:center;justify-content:space-between;background-color:#0c1c35;color:white;padding:10px 20px;}
    .logo{display:flex;align-items:center;gap:10px;cursor:pointer;}
    .logo img{width:40px;}
    .search-bar{flex:1;margin:0 20px;}
    .search-bar input{width:100%;padding:8px 12px;border-radius:25px;border:none;outline:none;font-size:14px;}
    .icons{display:flex;gap:15px;align-items:center;}
    .icons a{color:white;text-decoration:none;font-size:20px;}
    nav{display:flex;gap:10px;background-color:#f4f4f4;padding:10px;}
    nav button{flex:1;margin:0 5px;background-color:#3da8ff;color:white;border:none;padding:10px 0;border-radius:20px;cursor:pointer;font-weight:bold;transition:.3s;}
    nav button:hover{background-color:#1a8cff;}
    .product-wrap{background-color:#f9f9f9;padding:40px 20px;min-height:calc(100vh - 220px);}
    .product-card{max-width:1100px;margin:0 auto;background:#fff;border-radius:16px;box-shadow:0 10px 30px rgba(2,6,23,0.12);display:flex;gap:30px;padding:28px;align-items:stretch;}
    .product-media{flex:0 0 460px;max-width:460px;border-radius:12px;overflow:hidden;display:flex;align-items:center;justify-content:center;background:linear-gradient(180deg,#fafafa,#efefef);}
    .product-media img{width:100%;height:auto;object-fit:cover;}
    .product-info{flex:1 1 420px;display:flex;flex-direction:column;justify-content:space-between;}
    .product-info .meta{margin-bottom:8px;color:#6b6b6b;font-size:13px;}
    .product-info h1{margin:6px 0 10px;color:#0c1c35;font-size:28px;}
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
    .popup-box{background:#fff;border-radius:12px;padding:20px 26px;text-align:center;box-shadow:0 10px 40px rgba(2,6,23,0.2);max-width:360px;width:90%;animation:popupIn .22s ease;}
    .popup-box h3{margin:0 0 6px;color:#0c1c35;font-size:18px;}
    .popup-box p{margin:0 0 12px;color:#444;font-size:14px;}
    .popup-box .btn-close{display:inline-block;padding:8px 14px;border-radius:10px;background:#3da8ff;color:#fff;border:none;cursor:pointer;font-weight:700;}
    @keyframes popupIn{from{transform:translateY(8px) scale(.98);opacity:0;}to{transform:translateY(0) scale(1);opacity:1;}}
    @media screen and (max-width:800px){.product-card{flex-direction:column;align-items:center;text-align:center;}.product-media{width:90%;max-width:420px;}}
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
      <img id="prodImage" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgfzIPAOXZ7zyKo35HUSzotMWXogVm05H-Xw&s" alt="Monitor Xiaomi 27&quot; Gaming 165Hz">
    </div>

    <div class="product-info">
      <div>
        <div class="meta">Monitor • Xiaomi • Ofertas</div>
        <h1 id="prodTitle">Monitor Xiaomi 27" Gaming 165Hz</h1>
        <div class="price" id="prodPrice">$249.99</div>

        <div class="desc" id="prodDesc">
          • Pantalla IPS de 27" con resolución Full HD.<br>
          • Frecuencia de refresco de 165Hz y tiempo de respuesta de 1ms.<br>
          • Compatible con AMD FreeSync para juegos fluidos.<br>
          • Ángulos de visión amplios y colores precisos.<br>
          • Diseño ultradelgado con biseles finos.<br>
          • Ideal para gaming y productividad.
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
</
