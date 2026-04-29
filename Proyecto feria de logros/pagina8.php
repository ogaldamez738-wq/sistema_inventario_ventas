<?php
// producto.php - basado en tu layout; solo se modifica lo que está debajo del nav
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tecnozone - Producto</title>
  <style>
    /* ------- Tus estilos base (copiados) ------- */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #fff;
      overflow-x: hidden;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #0c1c35;
      color: white;
      padding: 10px 20px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      width: 40px;
    }

    .logo a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    .search-bar {
      flex: 1;
      margin: 0 20px;
      position: relative;
    }

    .search-bar input {
      width: 100%;
      padding: 8px 12px;
      border-radius: 25px;
      border: none;
      outline: none;
      font-size: 14px;
    }

    .icons {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    .icons a {
      color: white;
      text-decoration: none;
      font-size: 20px;
    }

    /* Barra de navegación proporcional */
    nav {
      display: flex;
      gap: 10px;
      background-color: #f4f4f4;
      padding: 10px;
    }

    nav button {
      flex: 1;
      margin: 0 5px;
      background-color: #3da8ff; /* Celeste medio */
      color: white;
      border: none;
      padding: 10px 0;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }

    nav button:hover {
      background-color: #1a8cff; /* Hover más oscuro */
    }

    /* ---------- SECCIÓN: PRODUCTO INDIVIDUAL ---------- */
    .product-wrap {
      background-color: #f9f9f9;
      padding: 40px 20px;
      min-height: calc(100vh - 220px);
    }

    .product-card {
      max-width: 1100px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(2,6,23,0.12);
      display: flex;
      gap: 30px;
      padding: 28px;
      align-items: stretch;
    }

    .product-media {
      flex: 0 0 460px;
      max-width: 460px;
      border-radius: 12px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(180deg, #fafafa, #efefef);
    }

    .product-media img {
      width: 100%;
      height: auto;
      object-fit: cover;
      display: block;
    }

    .product-info {
      flex: 1 1 420px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .product-info .meta {
      margin-bottom: 8px;
      color: #6b6b6b;
      font-size: 13px;
    }

    .product-info h1 {
      margin: 6px 0 10px;
      color: #0c1c35;
      font-size: 28px;
      line-height: 1.15;
    }

    .price {
      font-size: 26px;
      color: #3da8ff;
      font-weight: 700;
      margin-bottom: 18px;
    }

    .desc {
      color: #333;
      font-size: 15px;
      line-height: 1.5;
      margin-bottom: 22px;
    }

    .options {
      display: flex;
      gap: 16px;
      align-items: center;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .qty {
      display: flex;
      align-items: center;
      gap: 8px;
      border-radius: 10px;
    }

    .qty button {
      border: 1px solid #ddd;
      background: #fff;
      padding: 8px 10px;
      cursor: pointer;
      border-radius: 8px;
      font-size: 18px;
      line-height: 1;
    }

    .qty input {
      width: 60px;
      text-align: center;
      padding: 8px;
      border-radius: 8px;
      border: 1px solid #ddd;
      font-size: 15px;
    }

    .add-actions {
      display: flex;
      gap: 12px;
      align-items: center;
      flex-wrap: wrap;
    }

    .btn-add {
      background-color: #3da8ff;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 24px;
      font-weight: 700;
      cursor: pointer;
      transition: background .2s;
    }

    .btn-add:hover { background-color: #1a8cff; }

    .extra {
      margin-top: 20px;
      color: #666;
      font-size: 14px;
    }

    footer.small {
      text-align: center;
      padding: 18px 0;
      color: #fff;
      background: #0c1c35;
      margin-top: 30px;
    }

    /* ---------- POPUP (VENTANA EMERGENTE) ---------- */
    .popup {
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(12, 28, 53, 0.55);
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.25s ease;
      z-index: 9999;
    }
    .popup.show {
      opacity: 1;
      pointer-events: auto;
    }
    .popup-box {
      background: #fff;
      border-radius: 12px;
      padding: 20px 26px;
      text-align: center;
      box-shadow: 0 10px 40px rgba(2,6,23,0.2);
      max-width: 360px;
      width: 90%;
      animation: popupIn 0.22s ease;
    }
    .popup-box h3 {
      margin: 0 0 6px;
      color: #0c1c35;
      font-size: 18px;
    }
    .popup-box p { margin: 0 0 12px; color: #444; font-size: 14px; }
    .popup-box .btn-close {
      display: inline-block;
      padding: 8px 14px;
      border-radius: 10px;
      background: #3da8ff;
      color: #fff;
      border: none;
      cursor: pointer;
      font-weight: 700;
    }
    @keyframes popupIn {
      from { transform: translateY(8px) scale(.98); opacity: 0; }
      to { transform: translateY(0) scale(1); opacity: 1; }
    }

    /* ---------- RESPONSIVE ---------- */
    @media screen and (max-width: 1000px) {
      .product-card { padding: 20px; gap: 18px; }
      .product-media { flex: 0 0 380px; max-width: 380px; }
    }

    @media screen and (max-width: 800px) {
      nav { flex-direction: column; }
      nav button { margin: 6px 0; }
      header { flex-direction: column; align-items: flex-start; gap: 8px; padding-bottom: 0; }
      .product-card { flex-direction: column; align-items: center; text-align: center; }
      .product-media { width: 90%; max-width: 420px; }
      .product-info { width: 100%; }
      .qty input { width: 80px; }
      .add-actions { justify-content: center; }
    }

    @media screen and (max-width: 420px) {
      .product-media { max-width: 100%; padding: 8px; }
      .product-card { padding: 14px; border-radius: 12px; }
    }
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
    <a href="pagina9.php" title="Ver carrito"><span>🛒</span></a>
    <a href="registro.html" title="Registro"><span>👤</span></a>
  </div>
</header>
