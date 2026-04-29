<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fútbol - SEVENSPORT</title>
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
                        <a href="basketball.html" class="nav-link">Baloncesto</a>
                    </nav>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <a href="cart.html" class="text-white text-xl">
                            <i class="fas fa-shopping-cart"></i>
                            <span id="cartCount" class="cart-badge">0</span>
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

    <!-- Fútbol Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Equipamiento de Fútbol</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Todo lo que necesitas para dominar el campo</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Productos de Fútbol -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://d21tucfpen3j82.cloudfront.net/wp-content/uploads/2025/05/28143155/Balon-oficial-del-Mundial-de-Clubes-FIFA-2025-696x396.jpg" alt="Balón Oficial FIFA" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Balón del mundial de clubes de la FIFA 2025</h3>
                        <p class="text-gray-600 text-sm mb-4">Certificado oficial, material premium</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$119.99</span>
                            <button class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors" onclick="addToCart('Balón del mundial de clubes de la FIFA 2025', 119.99, 'https://d21tucfpen3j82.cloudfront.net/wp-content/uploads/2025/05/28143155/Balon-oficial-del-Mundial-de-Clubes-FIFA-2025-696x396.jpg')">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://i.pinimg.com/736x/c9/4d/e0/c94de0c3c1d9d051fbc6c220a5fa6692.jpg" alt="Botines Profesionales" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Botines de fútbol NIKE Mercurial Superfly V</h3>
                        <p class="text-gray-600 text-sm mb-4">Tacos moldeados, suela de caucho premium</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$159.99</span>
                            <button class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors" onclick="addToCart('Botines de fútbol NIKE Mercurial Superfly V', 159.99, 'https://i.pinimg.com/736x/c9/4d/e0/c94de0c3c1d9d051fbc6c220a5fa6692.jpg')">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://www.b2sport.es/imagenes/productos/657084_n_34065D_VISTA_1920x1920.jpg" alt="Portería de Entrenamiento" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Portería de Entrenamiento</h3>
                        <p class="text-gray-600 text-sm mb-4">Portería plegable, ideal para entrenar</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$89.50</span>
                            <button class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors" onclick="addToCart('Portería de Entrenamiento', 89.50, 'https://www.b2sport.es/imagenes/productos/657084_n_34065D_VISTA_1920x1920.jpg')">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://static.foxdeportes.com/2024/06/05/6e57a505d142f2a1e50283e3c40e479264621a60_11_32_10_591.jpg" alt="Uniforme Selección Nacional" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Uniforme del Real Madrid</h3>
                        <p class="text-gray-600 text-sm mb-4">Camiseta oficial, shorts y medias</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$135.00</span>
                            <button class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors" onclick="addToCart('Uniforme del Real Madrid', 135.00, 'https://static.foxdeportes.com/2024/06/05/6e57a505d142f2a1e50283e3c40e479264621a60_11_32_10_591.jpg')">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://walmartsv.vtexassets.com/arquivos/ids/247416/Guante-Para-Arquero-Milan-Chimera-2-10586.jpg?v=637896189960670000" alt="Guantes de Portero Pro" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Guantes de Portero Milan Chimera</h3>
                        <p class="text-gray-600 text-sm mb-4">Látex premium, corte negativo</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$65.99</span>
                            <button class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors" onclick="addToCart('Guantes de Portero Milan Chimera', 65.99, 'https://walmartsv.vtexassets.com/arquivos/ids/247416/Guante-Para-Arquero-Milan-Chimera-2-10586.jpg?v=637896189960670000')">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://deportesguerra.com.mx/cdn/shop/products/cono4.png?v=1673046897&width=4000" alt="Conos de Entrenamiento" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">Conos de Entrenamiento</h3>
                        <p class="text-gray-600 text-sm mb-4">Set de 20 conos, colores surtidos</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$29.99</span>
                            <button class="bg-primary text-white px-4 py-2 rounded hover:bg-red-700 transition-colors" onclick="addToCart('Conos de Entrenamiento', 29.99, 'https://deportesguerra.com.mx/cdn/shop/products/cono4.png?v=1673046897&width=4000')">
                                <i class="fas fa-shopping-cart mr-2"></i>Añadir
                            </button>
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
        // Función para añadir productos al carrito funcional
        function addToCart(name, price, image) {
            // Obtener carrito actual del localStorage
            let cart = JSON.parse(localStorage.getItem('sevensport_cart')) || [];
            
            // Verificar si el producto ya existe en el carrito
            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    name: name,
                    price: price,
                    quantity: 1,
                    image: image
                });
            }
            
            // Guardar carrito actualizado
            localStorage.setItem('sevensport_cart', JSON.stringify(cart));
            
            // Actualizar contador del carrito
            updateCartCount();
            
            // Mostrar mensaje de confirmación
            alert('Producto añadido al carrito!');
        }
        
        // Función para actualizar el contador del carrito
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('sevensport_cart')) || [];
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cartCount').textContent = totalItems;
        }
        
        // Actualizar contador al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            updateCartCount();
        });
    </script>
</body>
</html>