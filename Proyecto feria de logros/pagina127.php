<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tecnozone - Pasarela de Pago</title>
<style>
:root {
  --azul-oscuro: #0c1c35;
  --celeste: #4da6ff;
  --fondo-claro: #f5f7fb;
  --verde: #28a745;
  --rojo: #dc3545;
  --gris: #ccc;
}

body {
  margin:0;
  font-family:'Segoe UI', Arial, sans-serif;
  background-color: var(--fondo-claro);
  color:#333;
}

/* HEADER */
header { display:flex; align-items:center; justify-content:space-between; background-color: var(--azul-oscuro); color:white; padding:12px 25px; box-shadow:0 2px 6px rgba(0,0,0,0.2);}
.logo { display:flex; align-items:center; gap:10px; }
.logo img { width:45px; border-radius:8px; }
.search-bar { flex:1; margin:0 25px; }
.search-bar input { width:100%; padding:10px 15px; border-radius:30px; border:none; outline:none; font-size:15px; }
.icons { display:flex; gap:18px; align-items:center; font-size:22px; }
.icons a { color:white; text-decoration:none; }

/* NAVBAR */
nav { display:flex; gap:10px; background-color:#f4f4f4; padding:12px 20px; flex-wrap:wrap; justify-content:center; box-shadow: inset 0 -1px 0 rgba(0,0,0,0.05);}
nav button { flex:1; min-width:120px; margin:5px; background-color: var(--celeste); color:white; border:none; padding:10px 0; border-radius:25px; cursor:pointer; font-weight:bold; transition: all 0.3s ease;}
nav button:hover { background-color:#1a8cff; transform:translateY(-2px); box-shadow:0 4px 10px rgba(77,166,255,0.4); }

/* CONTENEDOR DE PAGO */
.pago-container { max-width:500px; margin:50px auto; padding:30px; border-radius:16px; background:#fff; box-shadow:0 8px 20px rgba(0,0,0,0.15);}
.pago-container h2 { text-align:center; color: var(--azul-oscuro); margin-bottom:25px; }
.total { background: var(--celeste); color:white; text-align:center; font-size:20px; font-weight:bold; padding:15px; border-radius:10px; margin-bottom:20px; box-shadow:0 4px 8px rgba(0,0,0,0.1); }

/* TARJETA */
.card { width:100%; height:220px; perspective:1000px; margin-bottom:20px;}
.card-inner { position:relative; width:100%; height:100%; border-radius:16px; transition: transform 0.8s; transform-style: preserve-3d;}
.card.flipped .card-inner { transform: rotateY(180deg);}
.card-front, .card-back { position:absolute; width:100%; height:100%; border-radius:16px; backface-visibility:hidden; color:white; display:flex; flex-direction:column; justify-content:center; padding:20px; box-sizing:border-box; font-family:'Courier New', monospace;}
.card-front { background: linear-gradient(135deg, #4da6ff, #0c1c35);}
.card-back { background: linear-gradient(135deg,#0c1c35,#4da6ff); transform: rotateY(180deg);}
.card-number { font-size:18px; letter-spacing:2px; margin-bottom:15px;}
.card-name { text-transform:uppercase; font-size:14px;}
.card-exp { font-size:14px; text-align:right;}
.card-cvv { text-align:right; font-size:16px; margin-top:80px;}

/* CAMPOS DE PAGO */
label { font-weight:bold; display:block; margin-top:10px; margin-bottom:5px;}
input, select, textarea { width:100%; padding:12px; border-radius:8px; border:1px solid var(--gris); outline:none; font-size:15px; box-shadow: inset 0 2px 5px rgba(0,0,0,0.05); transition:0.3s;}
input:focus, select:focus, textarea:focus { border-color: var(--celeste); box-shadow:0 0 8px rgba(77,166,255,0.3); }

/* BOTÓN PAGAR */
.btn-pagar { background-color: var(--celeste); color:white; width:100%; padding:14px; border:none; margin-top:25px; border-radius:10px; font-size:16px; cursor:pointer; font-weight:bold; transition: all 0.3s ease;}
.btn-pagar:hover { background-color:#1a8cff; transform:translateY(-2px); box-shadow:0 6px 15px rgba(77,166,255,0.4);}

/* MODAL */
.modal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:1000; }
.modal-content { background:#fff; padding:30px; border-radius:16px; text-align:center; max-width:400px; width:90%; box-shadow:0 8px 20px rgba(0,0,0,0.25);}
.loader { border:6px solid #f3f3f3; border-top:6px solid var(--celeste); border-radius:50%; width:50px; height:50px; animation:spin 1s linear infinite; margin:auto;}
@keyframes spin { 0%{transform:rotate(0deg);} 100%{transform:rotate(360deg);} }
.success-msg { font-size:18px; font-weight:bold; color: var(--verde); margin-top:20px; display:flex; align-items:center; justify-content:center; gap:10px; }
.success-msg span { font-size:24px; }

/* ICONOS INFERIORES */
.iconos-inferiores { display:flex; justify-content:center; flex-wrap:wrap; gap:25px; background-color: var(--azul-oscuro); padding:30px 10px; color:white; border-top:4px solid var(--celeste); margin-top:50px;}
.iconos-inferiores .icono { display:flex; flex-direction:column; align-items:center; text-decoration:none; color:white; transition: transform 0.3s ease, color 0.3s ease;}
.iconos-inferiores .icono:hover { transform: translateY(-5px); color: var(--celeste);}
.iconos-inferiores .icono span { font-size:32px; margin-bottom:8px;}
.iconos-inferiores p { margin:0; font-size:14px; font-weight:500; }

/* RESPONSIVE */
@media screen and (max-width:600px) {
  .pago-container { width:90%; margin:20px auto; }
  header { flex-direction:column; text-align:center; }
  .search-bar { margin:10px 0; }
  nav { flex-direction:column; }
  nav button { margin:6px 0; }
}
</style>
</head>
<body>

<header>
  <div class="logo"><img src="logo.png" alt="Logo"><strong>TECNOZONE</strong></div>
  <div class="search-bar"><input type="text" placeholder="Buscar productos..."></div>
  <div class="icons"><a href="pagina9.php"><span>🛒</span></a><a href="registro.html"><span>👤</span></a></div>
</header>

<nav>
  <button onclick="window.location.href='pagina3.php'">Categorías</button>
  <button onclick="window.location.href='pagina4.php'">Zona gamer</button>
  <button onclick="window.location.href='pagina5.php'">Ofertas</button>
  <button onclick="window.location.href='pagina6.php'">Novedades</button>
  <button onclick="window.location.href='pagina7.php'">Marcas</button>
</nav>

<div class="pago-container">
  <h2>Pasarela de Pago</h2>
  <div class="total">Total: $<span id="total">0.00</span></div>

  <!-- TARJETA ANIMADA -->
  <div class="card" id="card">
    <div class="card-inner">
      <div class="card-front">
        <div class="card-number" id="card-number">#### #### #### ####</div>
        <div class="card-name" id="card-name">NOMBRE</div>
        <div class="card-exp" id="card-exp">MM/AA</div>
      </div>
      <div class="card-back">
        <div class="card-cvv" id="card-cvv">CVV ###</div>
      </div>
    </div>
  </div>

  <!-- MÉTODO DE PAGO -->
  <label>Método de pago</label>
  <select id="metodo">
    <option value="tarjeta">Tarjeta de crédito/débito</option>
    <option value="paypal">PayPal</option>
    <option value="transferencia">Transferencia bancaria</option>
    <option value="efectivo">Pago en efectivo</option>
  </select>

  <!-- FORMULARIO DE TARJETA -->
  <div id="tarjeta-form">
    <label>Nombre del titular</label>
    <input type="text" id="nombre" placeholder="Tu nombre completo" oninput="document.getElementById('card-name').innerText=this.value||'NOMBRE'">

    <label>Número de tarjeta</label>
    <input type="text" id="tarjeta" maxlength="19" placeholder="4111 1111 1111 1111" oninput="updateCardNumber(this.value)">

    <label>Fecha de vencimiento (MM/AA)</label>
    <input type="text" id="fecha" maxlength="5" placeholder="08/28" oninput="document.getElementById('card-exp').innerText=this.value||'MM/AA'">

    <label>CVV</label>
    <input type="password" id="cvv" maxlength="4" placeholder="123" onfocus="flipCard(true)" onblur="flipCard(false)" oninput="document.getElementById('card-cvv').innerText=this.value||'###'">
  </div>

  <!-- CAMPOS DE ENVÍO -->
  <label>Nombre del destinatario</label>
  <input type="text" id="destinatario" placeholder="Nombre de quien recibe">

  <label>Dirección de envío</label>
  <textarea id="direccion" placeholder="Calle, número, ciudad, código postal"></textarea>

  <label>Teléfono de contacto</label>
  <input type="text" id="telefono" placeholder="Ej: +503 7000-0000">

  <label>Correo electrónico</label>
  <input type="email" id="correo" placeholder="ejemplo@correo.com">

  <button class="btn-pagar" onclick="procesarPago()">Pagar</button>
</div>

<!-- MODAL DE PROCESANDO -->
<div class="modal" id="modalPago">
  <div class="modal-content" id="modalContent">
    <div class="loader" id="loader"></div>
    <div class="success-msg" id="successMsg" style="display:none;">
      <span>✔</span> Su pedido se ha realizado con éxito
    </div>
    <p id="modalTexto">Procesando pago...</p>
  </div>
</div>

<section class="iconos-inferiores">
  <a href="pagina3.php" class="icono"><span>📂</span><p>Categorías</p></a>
  <a href="pagina4.php" class="icono"><span>🎮</span><p>Zona Gamer</p></a>
  <a href="pagina5.php" class="icono"><span>💸</span><p>Ofertas</p></a>
  <a href="pagina6.php" class="icono"><span>🆕</span><p>Novedades</p></a>
  <a href="pagina7.php" class="icono"><span>🏷</span><p>Marcas</p></a>
</section>

<script>
// Total dinámico
const params = new URLSearchParams(window.location.search);
const total = params.get("total") || "0.00";
document.getElementById("total").innerText = total;

// Mostrar/ocultar formulario tarjeta
document.getElementById("metodo").addEventListener("change", function(){
  document.getElementById("tarjeta-form").style.display = this.value === "tarjeta" ? "block" : "none";
});

// Tarjeta animada
function flipCard(f) { document.getElementById("card").classList.toggle("flipped", f); }
function updateCardNumber(val){ document.getElementById("card-number").innerText=val.replace(/\D/g,'').replace(/(.{4})/g,'$1 ').trim()||'#### #### #### ####'; }

function procesarPago(){
  const modal = document.getElementById("modalPago");
  const loader = document.getElementById("loader");
  const successMsg = document.getElementById("successMsg");
  const modalTexto = document.getElementById("modalTexto");

  modal.style.display = "flex";
  loader.style.display = "block";
  successMsg.style.display = "none";
  modalTexto.innerText = "Procesando pago...";

  setTimeout(()=>{
    loader.style.display = "none";
    successMsg.style.display = "flex";
    modalTexto.innerText = "";
    
    setTimeout(()=>{
      modal.style.display = "none";
      alert("Redirigir a página de confirmación o mostrar detalle del pedido");
    }, 2000);
  }, 3000);
}
</script>

</body>
</html>