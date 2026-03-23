<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEVENSPORT - Tu Tienda Deportiva</title>
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
                    <div class="flex items-center space-x-2">
                        <!-- Formulario POST que envía redirect a login.php -->
                        <form action="login.php" method="post" style="display:inline;">
                            <input type="hidden" name="redirect" value="checkout.php">
                            <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors" aria-label="Iniciar sesión">
                                Iniciar Sesión
                            </button>
                        </form>

                        <a href="register.php" class="bg-secondary text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors ml-2">
                            Registrarse
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary to-red-700 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6">Equipamiento Deportivo Profesional</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Los mejores artículos de fútbol y baloncesto para llevar tu juego al siguiente nivel</p>
            <div class="space-x-4">
                <a href="futbol.php" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Fútbol
                </a>
                <a href="basketball.php" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Baloncesto
                </a>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Categorías Destacadas</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="text-center p-8 bg-gradient-to-br from-red-50 to-red-100 rounded-xl hover:shadow-lg transition-shadow cursor-pointer">
                    <a href="futbol.php">
                        <div class="text-6xl mb-4 text-primary">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h3 class="font-bold text-2xl mb-2">Fútbol</h3>
                        <p class="text-gray-600">Balones, botines, uniformes y accesorios profesionales</p>
                    </a>
                </div>
                <div class="text-center p-8 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:shadow-lg transition-shadow cursor-pointer">
                    <a href="basketball.php">
                        <div class="text-6xl mb-4 text-secondary">
                            <i class="fas fa-basketball-ball"></i>
                        </div>
                        <h3 class="font-bold text-2xl mb-2">Baloncesto</h3>
                        <p class="text-gray-600">Balones, zapatillas, uniformes y equipos de entrenamiento</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Productos Populares</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://d21tucfpen3j82.cloudfront.net/wp-content/uploads/2025/05/28143155/Balon-oficial-del-Mundial-de-Clubes-FIFA-2025-696x396.jpg" alt="Balón Fútbol Profesional" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Balón del mundial de clubes de la FIFA 2025</h3>
                        <p class="text-gray-600 text-sm mb-4">Material premium, oficial para partidos</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$89.99</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://images-cdn.ubuy.co.in/636e4afb9e127900bd2aac23-nike-jordan-women-39-s-shoes-air-jordan.jp" alt="Zapatillas Baloncesto" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Zapatillas Air Jordan</h3>
                        <p class="text-gray-600 text-sm mb-4">Amortiguación avanzada, suela antideslizante</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$129.99</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://static.foxdeportes.com/2024/06/05/6e57a505d142f2a1e50283e3c40e479264621a60_11_32_10_591.jpg" alt="Uniforme Fútbol" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Uniforme del Real Madrid</h3>
                        <p class="text-gray-600 text-sm mb-4">Camiseta, shorts y medias del equipo</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$75.50</span>
                            <a href="cart.html" class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </a>
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
