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
    <!-- Header -->
    <header class="bg-dark text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <div class="text-2xl font-bold">
                        <i class="fas fa-futbol mr-2 text-primary"></i>SEVENSPORT
                    </div>
                    <nav class="hidden md:flex space-x-6">
                        <a href="index.html" class="nav-link">Inicio</a>
                        <a href="futbol.html" class="nav-link">Fútbol</a>
                        <a href="basketball.html" class="nav-link">Baloncesto</a>
                    </nav>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <a href="cart.html" class="text-white text-xl">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-badge">3</span>
                        </a>
                    </div>
                    <div>
                        <a href="login.html" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors">
                            Iniciar Sesión
                        </a>
                        <a href="register.html" class="bg-secondary text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors ml-2">
                            Registrarse
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Checkout Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Checkout</h1>
                <p class="text-gray-600">Completa tu pedido con seguridad</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="font-semibold text-lg mb-4 text-gray-800">Información de Envío</h3>
                        <form>
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Apellido</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Dirección</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Ciudad</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Código Postal</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="font-semibold text-lg mb-4 text-gray-800">Método de Pago</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input type="radio" id="paypal" name="payment" value="paypal" class="mr-3" checked>
                                <label for="paypal" class="flex items-center">
                                    <i class="fab fa-paypal text-2xl text-primary mr-3"></i>
                                    PayPal
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="cash" name="payment" value="cash" class="mr-3">
                                <label for="cash" class="flex items-center">
                                    <i class="fas fa-money-bill-wave text-2xl text-green-600 mr-3"></i>
                                    Pago en Persona
                                </label>
                            </div>
                        </div>
                        
                        <div class="mt-6">
                            <a href="paypal.html" id="paypalBtn" class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors block text-center">
                                <i class="fab fa-paypal mr-2"></i>Pagar con PayPal
                            </a>
                            <a href="pago-en-persona.html" id="cashBtn" class="w-full bg-gray-600 text-white py-3 rounded-lg font-semibold hover:bg-gray-700 transition-colors block text-center mt-3 hidden">
                                <i class="fas fa-store mr-2"></i>Pagar en Persona
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="font-semibold text-lg mb-4 text-gray-800">Resumen del Pedido</h3>
                    <div class="space-y-3 mb-4">
                        <div class="flex justify-between">
                            <span>Balón Fútbol Profesional</span>
                            <span>$89.99</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Zapatillas Baloncesto Pro</span>
                            <span>$129.99</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Uniforme Fútbol Completo</span>
                            <span>$75.50</span>
                        </div>
                        <div class="flex justify-between pt-4 border-t">
                            <span>Subtotal:</span>
                            <span>$295.48</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Envío:</span>
                            <span>$15.00</span>
                        </div>
                    </div>
                    <div class="border-t pt-4">
                        <div class="flex justify-between text-lg font-bold">
                            <span>Total:</span>
                            <span class="text-primary">$310.48</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
     <footer class="bg-dark text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="text-2xl font-bold mb-4">
                        <i class="fas fa-futbol mr-2 text-primary"></i>SEVENSPORT
                    </div>
                    <p class="text-gray-400">Tu tienda de confianza para equipamiento deportivo profesional de fútbol y baloncesto Donde el deporte vive, y la pasión nos une, hecho por jóvenes, para campeones.”.</p>
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
                        <li><i class="fas fa-map-marker-alt mr-2"></i>Ciudad Barrios, 8a Avenida Sur</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 SEVENSPORT. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>

    <script>
        // Cambiar botones según método de pago seleccionado
        document.getElementById('paypal').addEventListener('change', function() {
            document.getElementById('paypalBtn').classList.remove('hidden');
            document.getElementById('cashBtn').classList.add('hidden');
        });
        
        document.getElementById('cash').addEventListener('change', function() {
            document.getElementById('paypalBtn').classList.add('hidden');
            document.getElementById('cashBtn').classList.remove('hidden');
        });
    </script>
</body>
</html>