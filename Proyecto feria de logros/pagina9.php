<?php
// carrito.php - Tecnozone
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Carrito - Tecnozone</title>
  <style>
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
      cursor: pointer;
    }

    .logo img {
      width: 40px;
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

    nav {
      display: flex;
      gap: 10px;
      background-color: #f4f4f4;
      padding: 10px;
    }

    nav button {
      flex: 1;
      margin: 0 5px;
      background-color: #3da8ff;
      color: white;
      border: none;
      padding: 10px 0;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }

    nav button:hover {
      background-color: #1a8cff;
    }

    /* ---------- SECCIÓN CARRITO ---------- */
    .carrito-container {
      padding: 40px 20px;
      background-color: #f9f9f9;
      min-height: calc(100vh - 220px);
    }

    h2 {
      text-align: center;
      color: #0c1c35;
      margin-bottom: 30px;
      font-size: 28px;
    }

    table {
      width: 100%;
      max-width: 1000px;
      margin: 0 auto;
      border-collapse: collapse;
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(12, 28, 53, 0.1);
    }

    th, td {
      padding: 14px 10px;
      text-align: center;
    }

    th {
      background-color: #0c1c35;
      color: white;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 14px;
    }

    td {
      border-bottom: 1px solid #eee;
      font-size: 15px;
    }

    td img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 8px;
    }

    .qty-control {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
    }

    .qty-control button {
      border: 1px solid #ccc;
      background: #fff;
      color: #0c1c35;
      cursor: pointer;
      font-size: 18px;
      border-radius: 8px;
      width: 28px;
      height: 28px;
    }

    .qty-control input {
      width: 50px;
      text-align: center;
      border-radius: 6px;
      border: 1px solid #ccc;
      padding: 5px;
    }

    .btn-delete {
      background-color: #ff4d4d;
      border: none;
      color: white;
      padding: 6px 10px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
    }

    .btn-delete:hover {
      background-color: #d93636;
    }

    .total {
      max-width: 1000px;
      margin: 20px auto;
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(12, 28, 53, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .total strong {
      font-size: 20px;
      color: #0c1c35;
    }

    .btn-pagar {
      background-color: #3da8ff;
      border: none;
      color: white;
      padding: 12px 20px;
      border-radius: 24px;
      font-size: 16px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.2s;
    }

    .btn-pagar:hover {
      background-color: #1a8cff;
    }

    .vacio {
      text-align: center;
      font-size: 18px;
      color: #555;
      margin-top: 60px;
    }

    footer {
      text-align: center;
      padding: 18px 0;
      color: #fff;
      background: #0c1c35;
      margin-top: 40px;
    }

    @media screen and (max-width: 700px) {
      table thead {
        display: none;
      }

      table, tbody, tr, td {
        display: block;
        width: 100%;
      }

      tr {
        margin-bottom: 15px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        padding: 10px;
      }

      td {
        text-align: left;
        border: none;
        padding: 8px 0;
      }

      td::before {
        content: attr(data-label);
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #0c1c35;
      }

      .qty-control {
        justify-content: flex-start;
      }

      .total {
        flex-direction: column;
        gap: 10px;
      }
    }
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
    <a href="pagina9.php"><span>🛒</span></a>
    <a href="registro.html"><span>👤</span></a>
  </div>
</header>

<nav>
  <button type="button" onclick="window.location.href='pagina3.php'">Categorías</button>
  <button type="button" onclick="window.location.href='pagina4.php'">Zona gamer</button>
  <button type="button" onclick="window.location.href='pagina5.php'">Ofertas</button>
  <button type="button" onclick="window.location.href='pagina6.php'">Novedades</button>
  <button type="button" onclick="window.location.href='pagina7.php'">Marcas</button>
</nav>

<div class="carrito-container">
  <h2>🛒 Tu Carrito de Compras</h2>
  <div id="carritoTabla"></div>
  <div id="totalContainer"></div>
</div>

<footer>© 2025 Tecnozone - Todos los derechos reservados</footer>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const contenedor = document.getElementById("carritoTabla");
    const totalContainer = document.getElementById("totalContainer");

    function renderCarrito() {
      let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

      if (carrito.length === 0) {
        contenedor.innerHTML = '<p class="vacio">Tu carrito está vacío 🛍️</p>';
        totalContainer.innerHTML = "";
        return;
      }

      let tabla = `
        <table>
          <thead>
            <tr>
              <th>Imagen</th>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
      `;

      let total = 0;
      carrito.forEach((item, index) => {
        let subtotal = item.precio * item.cantidad;
        total += subtotal;

        tabla += `
          <tr>
            <td data-label="Imagen"><img src="${item.imagen}" alt="${item.nombre}"></td>
            <td data-label="Producto">${item.nombre}</td>
            <td data-label="Precio">$${item.precio.toFixed(2)}</td>
            <td data-label="Cantidad">
              <div class="qty-control">
                <button onclick="cambiarCantidad(${index}, -1)">−</button>
                <input type="number" min="1" value="${item.cantidad}" onchange="actualizarCantidad(${index}, this.value)">
                <button onclick="cambiarCantidad(${index}, 1)">+</button>
              </div>
            </td>
            <td data-label="Subtotal">$${subtotal.toFixed(2)}</td>
            <td data-label="Eliminar"><button class="btn-delete" onclick="eliminarProducto(${index})">✖</button></td>
          </tr>
        `;
      });

      tabla += `</tbody></table>`;
      contenedor.innerHTML = tabla;

      totalContainer.innerHTML = `
        <div class="total">
          <strong>Total: $${total.toFixed(2)}</strong>
          <button class="btn-pagar" onclick="pagar()">Proceder al pago</button>
        </div>
      `;
    }

    window.cambiarCantidad = function(index, delta) {
      let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
      carrito[index].cantidad += delta;
      if (carrito[index].cantidad <= 0) carrito[index].cantidad = 1;
      localStorage.setItem("carrito", JSON.stringify(carrito));
      renderCarrito();
    };

    window.actualizarCantidad = function(index, value) {
      let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
      let nueva = parseInt(value);
      if (isNaN(nueva) || nueva < 1) nueva = 1;
      carrito[index].cantidad = nueva;
      localStorage.setItem("carrito", JSON.stringify(carrito));
      renderCarrito();
    };

    window.eliminarProducto = function(index) {
      let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
      carrito.splice(index, 1);
      localStorage.setItem("carrito", JSON.stringify(carrito));
      renderCarrito();
    };

    // Solo se cambió esta función para enviar el total
    window.pagar = function() {
      let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
      let total = 0;
      carrito.forEach(item => { total += item.precio * item.cantidad; });
      window.location.href = "pagina127.php?total=" + total.toFixed(2);
    };

    renderCarrito();
  });
</script>
</body>
</html>
