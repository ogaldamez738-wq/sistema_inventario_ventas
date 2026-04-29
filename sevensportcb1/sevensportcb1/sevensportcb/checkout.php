<?php
session_start();
// Si el usuario NO está logueado, redirigir al login
if (!isset($_SESSION['user_id'])) {
    // Almacenar la página actual para redirigir después del login
    $_SESSION['redirect_to'] = 'checkout.php';
    header("Location: login.php");
    exit();
}

// Configuración de la Base de Datos (¡MODIFICA ESTOS VALORES SI ES NECESARIO!)
$servername = "localhost";
$username   = "root"; // Tu usuario de MySQL/MariaDB
$password   = "";     // Tu contraseña de MySQL/MariaDB
$dbname     = "sevensport_db"; // El nombre de la base de datos que creaste

// Mensajes para el usuario
$error_message   = "";
$success_message = "";

// 1. Procesar el Formulario de Checkout
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ==================================================================================
    // ⚠️ Seguridad: los valores enviados desde el cliente (total, cantidad) deben
    // re-calcularse/validarse en el servidor con la información real del carrito.
    // Aquí asumimos el flujo actual (datos vienen del localStorage -> campos ocultos).
    // ==================================================================================

    // Obtener user_id de la sesión (ya verificado al inicio)
    $user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;

    // Obtener y sanitizar datos del pedido (se esperan campos ocultos que rellena JS)
    $total               = isset($_POST['total_pedido']) ? floatval($_POST['total_pedido']) : 0.00;
    $cantidad_productos  = isset($_POST['cantidad_total']) ? intval($_POST['cantidad_total']) : 0;
    $payment_method      = isset($_POST['payment_method']) ? htmlspecialchars($_POST['payment_method']) : '';

    // Información de envío (opcional, se puede guardar aparte)
    $full_name = isset($_POST['full_name']) ? htmlspecialchars(trim($_POST['full_name'])) : '';
    $email     = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $address   = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';
    $city      = isset($_POST['city']) ? htmlspecialchars(trim($_POST['city'])) : '';
    $state     = isset($_POST['state']) ? htmlspecialchars(trim($_POST['state'])) : '';
    $zip       = isset($_POST['zip']) ? htmlspecialchars(trim($_POST['zip'])) : '';

    // Precio por producto (si no lo tienes por item, lo dejamos en 0.00)
    $precio_por_producto = 0.00;

    // Validaciones mínimas
    if ($user_id <= 0) {
        $error_message = "Debes iniciar sesión para realizar el pedido.";
    } elseif ($total <= 0 || $cantidad_productos <= 0) {
        $error_message = "No se pudo procesar el pedido. El total o la cantidad es inválida.";
    } elseif (empty($payment_method) || empty($full_name) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Información de envío/pago incompleta o inválida.";
    } else {
        // Conexión a la Base de Datos
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            $error_message = "Error de conexión a la base de datos: " . $conn->connect_error;
        } else {
            // Verificar que el usuario existe (evita violación de FK)
            $chk = $conn->prepare("SELECT ID_de_usuario FROM usuario_regi WHERE ID_de_usuario = ?");
            if (!$chk) {
                $error_message = "Error en la consulta de verificación: " . $conn->error;
            } else {
                $chk->bind_param("i", $user_id);
                $chk->execute();
                $chk->store_result();
                if ($chk->num_rows === 0) {
                    $error_message = "Usuario no encontrado. Por favor, inicie sesión nuevamente.";
                    $chk->close();
                    $conn->close();
                } else {
                    $chk->close();

                    // Insertar pedido con transacción
                    $conn->begin_transaction();

                    // NOTA: la tabla 'pedidos' requiere ID_de_usuario (foreign key)
                    $stmt = $conn->prepare("INSERT INTO pedidos (ID_de_usuario, cantidad_de_productos, precio_por_producto, total) VALUES (?, ?, ?, ?)");
                    if (!$stmt) {
                        $conn->rollback();
                        $error_message = "Error al preparar la inserción: " . $conn->error;
                        $conn->close();
                    } else {
                        // bind: i = int (ID_de_usuario), i = int (cantidad), d = double (precio), d = double (total)
                        $stmt->bind_param("iidd", $user_id, $cantidad_productos, $precio_por_producto, $total);
                        $ok = $stmt->execute();

                        if (!$ok) {
                            $err = $stmt->error;
                            $stmt->close();
                            $conn->rollback();
                            $error_message = "Error al guardar el pedido: " . $err;
                            $conn->close();
                        } else {
                            $last_id = $conn->insert_id;
                            $stmt->close();
                            $conn->commit();
                            $success_message = "¡Pedido #$last_id registrado exitosamente!";

                            // Redirigir según método de pago
                            if ($payment_method === 'paypal') {
                                header("Location: paypal.html?order_id=" . $last_id . "&total=" . urlencode(number_format($total, 2, '.', '')));
                                exit();
                            } elseif ($payment_method === 'cash') {
                                header("Location: pago-en-persona.php?order_id=" . $last_id . "&total=" . urlencode(number_format($total, 2, '.', '')));
                                exit();
                            } else {
                                header("Location: confirmation.html?order_id=" . $last_id);
                                exit();
                            }
                        }
                    }
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - SEVENSPORT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#dc2626',
                        secondary: '#1e3a8a',
                        dark: '#0f172a',
                        light: '#f8fafc'
                    }
                }
            }
        }
    </script>
    <style>
        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #dc2626;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }
        .nav-link {
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: #dc2626 !important;
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-dark text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <div class="text-2xl font-bold">
                        <i class="fas fa-futbol mr-2 text-primary"></i>SEVENSPORT
                    </div>
                    <nav class="hidden md:flex space-x-6">
                        <a href="index.php" class="nav-link">Inicio</a>
                        <a href="futbol.php" class="nav-link">Fútbol</a>
                        <a href="basketball.php" class="nav-link">Baloncesto</a>
                    </nav>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <a href="cart.html" class="text-white text-xl">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-badge" id="cartCount">0</span> 
                        </a>
                    </div>
                    <div>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <span class="text-white mr-4">Hola, <?php echo htmlspecialchars(isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Usuario'); ?>!</span>
                            <a href="logout.php" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors">
                                Cerrar Sesión
                            </a>
                        <?php else: ?>
                            <a href="login.php" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors">
                                Iniciar Sesión
                            </a>
                            <a href="register.php" class="bg-secondary text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors ml-2">
                                Registrarse
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold text-dark mb-8 text-center">Finalizar Compra</h1>

        <?php if ($error_message): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">¡Error en el Pedido!</strong>
                <span class="block sm:inline"><?php echo $error_message; ?></span>
            </div>
        <?php endif; ?>

        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3">
                
                <div class="bg-white p-6 rounded-xl shadow-lg mb-8">
                    <h2 class="text-2xl font-semibold text-dark mb-4 border-b pb-2">1. Información de Envío</h2>
                    <form action="checkout.php" method="POST" id="checkoutForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="full_name" class="block text-gray-700 mb-2">Nombre Completo</label>
                                <input type="text" id="full_name" name="full_name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary" placeholder="Ej: Juan Pérez" 
                                    value="<?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : ''; ?>">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary" placeholder="ejemplo@correo.com">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="address" class="block text-gray-700 mb-2">Dirección Completa</label>
                            <input type="text" id="address" name="address" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary" placeholder="Calle, número, apto/casa">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                            <div>
                                <label for="city" class="block text-gray-700 mb-2">Ciudad</label>
                                <input type="text" id="city" name="city" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary" placeholder="Ciudad">
                            </div>
                            <div>
                                <label for="state" class="block text-gray-700 mb-2">Estado/Provincia</label>
                                <input type="text" id="state" name="state" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary" placeholder="Estado">
                            </div>
                            <div>
                                <label for="zip" class="block text-gray-700 mb-2">Código Postal</label>
                                <input type="text" id="zip" name="zip" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary" placeholder="CP">
                            </div>
                        </div>

                        <input type="hidden" name="total_pedido" id="totalPedidoInput" value="0.00">
                        <input type="hidden" name="cantidad_total" id="cantidadTotalInput" value="0">
                        <input type="hidden" name="payment_method" id="paymentMethodInput" value="paypal">
                    </form>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-semibold text-dark mb-4 border-b pb-2">2. Método de Pago</h2>
                    
                    <div class="space-y-4">
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:border-secondary">
                            <input type="radio" name="payment_radio" value="paypal" id="paypal" checked class="text-secondary focus:ring-secondary mr-3">
                            <i class="fab fa-paypal text-blue-600 text-2xl mr-3"></i>
                            <span class="font-medium">PayPal / Tarjeta de Crédito</span>
                        </label>

                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:border-secondary">
                            <input type="radio" name="payment_radio" value="cash" id="cash" class="text-secondary focus:ring-secondary mr-3">
                            <i class="fas fa-money-bill-wave text-green-600 text-2xl mr-3"></i>
                            <span class="font-medium">Pago en Persona / Contra Entrega</span>
                        </label>
                    </div>

                    <div class="mt-6 text-center">
                        <button type="submit" form="checkoutForm" id="paypalBtn" class="w-full bg-secondary text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition-colors">
                            Proceder al Pago con PayPal / Tarjeta (Total: $0.00)
                        </button>
                        <button type="submit" form="checkoutForm" id="cashBtn" class="hidden w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                            Confirmar Pedido con Pago en Persona (Total: $0.00)
                        </button>
                    </div>
                </div>

            </div>

            <div class="lg:w-1/3">
                <div class="bg-white p-6 rounded-xl shadow-lg sticky top-20">
                    <h2 class="text-2xl font-semibold text-dark mb-4 border-b pb-2">Resumen de tu Pedido</h2>
                    
                    <div id="order-items" class="space-y-4 max-h-96 overflow-y-auto mb-4">
                        <div class="text-gray-500 text-center py-4">Cargando ítems del carrito...</div>
                    </div>
                    
                    <div class="space-y-3 mt-4 pt-4 border-t">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-medium" id="subtotalDisplay">$0.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Envío</span>
                            <span class="font-medium text-green-600" id="shippingDisplay">Gratis</span>
                        </div>
                        <div class="flex justify-between font-bold text-xl border-t pt-3">
                            <span>Total Final</span>
                            <span class="text-primary" id="totalFinalDisplay">$0.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <footer class="bg-dark text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="text-2xl font-bold mb-4">
                        <i class="fas fa-futbol mr-2 text-primary"></i>SEVENSPORT
                    </div>
                    <p class="text-gray-400">Donde el deporte vive y la pasión nos une hecho por jovenes para campeones.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Categorías</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="futbol.php" class="hover:text-white nav-link">Fútbol</a></li>
                        <li><a href="basketball.php" class="hover:text-white nav-link">Baloncesto</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Soporte</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Contacto</a></li>
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                        <li><a href="#" class="hover:text-white">Política de Envíos</a></li>
                        <li><a href="#" class="hover:text-white">Devoluciones</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Contacto</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i>+503 7597 1171</li>
                        <li><i class="fas fa-envelope mr-2"></i>sevensport@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i>Ciudad Barrios 8a Avenida Sur</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 SEVENSPORT. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Función para actualizar el contador del carrito en el header
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('sevensport_cart')) || [];
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cartCount').textContent = totalItems;
        }

        // Función corregida y mejorada para actualizar el resumen de la orden dinámicamente
        function updateOrderSummary() {
            // Usa la clave de localStorage identificada en cart.html
            const cart = JSON.parse(localStorage.getItem('sevensport_cart')) || []; 
            const orderItemsContainer = document.getElementById('order-items');
            orderItemsContainer.innerHTML = '';
            
            let total = 0.00;
            let totalItems = 0;
            const shippingCost = 0.00; // Envío gratis en este ejemplo

            if (cart.length === 0) {
                orderItemsContainer.innerHTML = '<div class="text-gray-500 text-center py-4">Tu carrito está vacío.</div>';
            } else {
                // Recorrer el carrito para construir la lista y calcular totales
                cart.forEach(item => {
                    const itemTotal = item.price * item.quantity;
                    total += itemTotal;
                    totalItems += item.quantity;

                    const itemHtml = `
                        <div class="flex justify-between items-center border-b pb-2">
                            <span class="text-gray-600">${item.name} (x${item.quantity})</span>
                            <span class="font-semibold text-dark">$${itemTotal.toFixed(2)}</span>
                        </div>
                    `;
                    orderItemsContainer.innerHTML += itemHtml;
                });
            }

            // Actualizar los campos ocultos que PHP lee
            document.getElementById('totalPedidoInput').value = total.toFixed(2);
            document.getElementById('cantidadTotalInput').value = totalItems;
            
            // Actualizar el texto del resumen
            const totalFinal = total + shippingCost;
            document.getElementById('subtotalDisplay').textContent = `$${total.toFixed(2)}`;
            document.getElementById('totalFinalDisplay').textContent = `$${totalFinal.toFixed(2)}`;
            
            // Actualizar el texto de los botones de pago
            document.getElementById('paypalBtn').textContent = `Proceder al Pago con PayPal / Tarjeta (Total: $${totalFinal.toFixed(2)})`;
            document.getElementById('cashBtn').textContent = `Confirmar Pedido con Pago en Persona (Total: $${totalFinal.toFixed(2)})`;

            // Habilitar/Deshabilitar botones
            const isDisabled = totalItems === 0;
            document.getElementById('paypalBtn').disabled = isDisabled;
            document.getElementById('cashBtn').disabled = isDisabled;
            document.getElementById('paypalBtn').classList.toggle('opacity-50', isDisabled);
            document.getElementById('cashBtn').classList.toggle('opacity-50', isDisabled);
            document.getElementById('paypalBtn').classList.toggle('cursor-not-allowed', isDisabled);
            document.getElementById('cashBtn').classList.toggle('cursor-not-allowed', isDisabled);
        }

        // Cambiar botones y actualizar campo oculto 'payment_method' según el radio button
        function handlePaymentMethodChange() {
            const paypalRadio = document.getElementById('paypal');
            const cashRadio = document.getElementById('cash');
            const paypalBtn = document.getElementById('paypalBtn');
            const cashBtn = document.getElementById('cashBtn');
            const paymentMethodInput = document.getElementById('paymentMethodInput');
            
            if (paypalRadio.checked) {
                paymentMethodInput.value = 'paypal';
                paypalBtn.classList.remove('hidden');
                cashBtn.classList.add('hidden');
            } else if (cashRadio.checked) {
                paymentMethodInput.value = 'cash';
                paypalBtn.classList.add('hidden');
                cashBtn.classList.remove('hidden');
            }
        }
        
        // Asignar listeners a los radio buttons
        document.getElementById('paypal').addEventListener('change', handlePaymentMethodChange);
        document.getElementById('cash').addEventListener('change', handlePaymentMethodChange);

        // Inicializar al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            updateCartCount();
            updateOrderSummary();
            handlePaymentMethodChange(); // Inicializar el botón visible y el campo oculto
        });

    </script>
</body>
</html>
