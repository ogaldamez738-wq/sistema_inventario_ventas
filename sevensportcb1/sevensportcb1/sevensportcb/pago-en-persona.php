<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago en Persona - SEVENSPORT</title>
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
                        <a href="index.php" class="nav-link">Inicio</a>
                        <a href="futbol.php" class="nav-link">Fútbol</a>
                        <a href="basketball.php" class="nav-link">Baloncesto</a>
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
                        <a href="login.php" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors">
                            Iniciar Sesión
                        </a>
                        <a href="register.php" class="bg-secondary text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors ml-2">
                            Registrarse
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Pago en Persona Section -->
    <section class="bg-gray-100 min-h-screen flex items-center justify-center py-16">
        <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-2xl">
            <div class="text-center mb-6">
                <div class="text-6xl text-green-600 mb-4">
                    <i class="fas fa-store"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Pago en Persona</h2>
                <p class="text-gray-600">Visita nuestra tienda física para completar tu compra</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-semibold text-lg mb-4 text-gray-800">Detalles del Pedido</h3>
                    <div class="bg-gray-50 p-4 rounded-lg space-y-3">
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
                            <span class="text-green-600">Gratis (Recogida en tienda)</span>
                        </div>
                        <div class="flex justify-between text-lg font-bold mt-4 pt-4 border-t">
                            <span>Total:</span>
                            <span class="text-primary">$295.48</span>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-4 text-gray-800">Nuestra Tienda</h3>
                    <div class="bg-blue-50 p-6 rounded-lg space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Dirección</h4>
                                <p>Calle Deportiva 123<br>Ciudad Deportiva, CP 12345</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-clock text-primary mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Horario</h4>
                                <p>Lunes - Viernes: 9:00 - 20:00<br>Sábado: 10:00 - 18:00<br>Domingo: Cerrado</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-phone text-primary mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Contacto</h4>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center">
                        <a href="confirmation.html" class="bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                            <i class="fas fa-check-circle mr-2"></i>Confirmar Recogida
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center text-sm text-gray-500">
                <p>Presenta este pedido en nuestra tienda para recoger tus productos</p>
                <p class="mt-2">Número de pedido: <span class="font-semibold text-primary">SP2024001</span></p>
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
</body>
</html>