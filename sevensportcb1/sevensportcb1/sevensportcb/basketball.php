<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baloncesto - SEVENSPORT</title>
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
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }
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
                            <span class="cart-badge">0</span>
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

    <!-- Basketball Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Equipamiento de Baloncesto</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Domina la cancha con nuestro equipo profesional</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Productos de Baloncesto -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://walmartsv.vtexassets.com/arquivos/ids/740351-800-450?v=638835315103900000&width=800&height=450&aspect=true" alt="Balón Wilson NBA" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Balón Wilson NBA</h3>
                        <p class="text-gray-600 text-sm mb-4">Oficial de la NBA, cuero premium</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$199.99</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://images-cdn.ubuy.co.in/636e4afb9e127900bd2aac23-nike-jordan-women-39-s-shoes-air-jordan.jpg" alt="Zapatillas Air Jordan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Zapatillas Air Jordan</h3>
                        <p class="text-gray-600 text-sm mb-4">Tecnología Air, diseño icónico</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$249.99</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://news.mondoiberica.com.es/wp-content/uploads/2017/03/canasta.jpg" alt="Canasta Reglamentaria" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Canasta Reglamentaria</h3>
                        <p class="text-gray-600 text-sm mb-4">Altura regulable, tablero de vidrio templado</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$499.50</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://www.nbastore.com.mx/medias/-DO9530-508-1.jpg?context=bWFzdGVyfGltYWdlc3wxNzAxOTB8aW1hZ2UvanBlZ3xhVzFoWjJWekwyaG1OaTlvTW1Ndk1USXhPVFF5TXpFM05EWTFPVEF1YW5CbnwxMDI3ZTEzZjNkNjY5OTVlM2QzMmYyODRjMWQxYmM1MTcxMzdmZGI4YmMxNTE4N2Q4MzMzMDU4NDNlM2QwODg3" alt="Uniforme de Equipo" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Uniforme de Equipo Los Angeles Lakers</h3>
                        <p class="text-gray-600 text-sm mb-4">Camiseta y shorts, personalizable</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$85.00</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://www.winnendeportes.com/cdn/shop/products/r1.jpg?v=1633123317" alt="Rodilleras Profesionales" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Rodilleras Profesionales</h3>
                        <p class="text-gray-600 text-sm mb-4">Protección máxima, material transpirable</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$45.99</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://m.media-amazon.com/images/I/71Ju4vGgiHL.jpg" alt="Bomba de Aire Digital" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Bomba de Aire Digital</h3>
                        <p class="text-gray-600 text-sm mb-4">Presión precisa, pantalla digital</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$35.50</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="index.php" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>Volver al Inicio
                </a>
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