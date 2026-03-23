<?php
session_start();
// PHP Script para procesar el formulario de registro y conectarse a la base de datos

// Configuración de la Base de Datos (¡MODIFICA ESTOS VALORES!)
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'sevensport_db';


// Mensajes para el usuario
$success_message = "";
$error_message = "";

// Conexión a la Base de Datos
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Verificar la conexión
if ($conn->connect_error) {
    $error_message = "Error de conexión a la base de datos: " . $conn->connect_error;
} else {
    // Procesar el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger y limpiar los datos
        $nombre = $conn->real_escape_string($_POST['nombre']);
        $apellido = $conn->real_escape_string($_POST['apellido']);
        $email = $conn->real_escape_string($_POST['email']);
        $contrasena = $_POST['contrasena'];
        $confirmar_contrasena = $_POST['confirmar_contrasena'];
        
        // Validación básica de los datos
        if (empty($nombre) || empty($apellido) || empty($email) || empty($contrasena) || empty($confirmar_contrasena)) {
            $error_message = "Todos los campos son obligatorios.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "El formato del email es inválido.";
        } elseif ($contrasena !== $confirmar_contrasena) {
            $error_message = "Las contraseñas no coinciden.";
        } else {
            // Combinar nombre y apellido para el campo 'nombre_de_usuario'
            $nombre_completo = trim($nombre . " " . $apellido);
            
            // Hashear la contraseña por seguridad
            $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);
            
            // 4. Verificar si el usuario ya existe (por email)
            $stmt = $conn->prepare("SELECT ID_de_usuario FROM usuario_regi WHERE correo_de_usuario = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            
            if ($stmt->num_rows > 0) {
                $error_message = "El email ya está registrado. Por favor, inicia sesión.";
            } else {
                // 5. Preparar la sentencia de inserción (para prevenir inyección SQL)
                $stmt_insert = $conn->prepare("INSERT INTO usuario_regi (nombre_de_usuario, correo_de_usuario, contrasena_hash) VALUES (?, ?, ?)");
                $stmt_insert->bind_param("sss", $nombre_completo, $email, $contrasena_hash);
                
                // 6. Ejecutar la inserción
                if ($stmt_insert->execute()) {
                    $success_message = "¡Registro exitoso! Ahora puedes iniciar sesión.";
                } else {
                    $error_message = "Error al registrar: " . $stmt_insert->error;
                }
                $stmt_insert->close();
            }
            $stmt->close();
        }
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - SEVENSPORT</title>
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

    <section class="bg-gray-100 min-h-screen flex items-center justify-center py-16">
        <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-md">
            <div class="text-center mb-6">
                <div class="text-4xl text-primary mb-2">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Crear Cuenta</h2>
                <p class="text-gray-600">Únete a SEVENSPORT hoy</p>
            </div>

            <?php if ($success_message): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">¡Éxito!</strong>
                    <span class="block sm:inline"><?php echo $success_message; ?></span>
                </div>
            <?php endif; ?>
            
            <?php if ($error_message): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">¡Error!</strong>
                    <span class="block sm:inline"><?php echo $error_message; ?></span>
                </div>
            <?php endif; ?>
            
            <form id="registerForm" action="register.php" method="POST">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 mb-2" for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Apellido" value="<?php echo isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : ''; ?>">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="tu@email.com" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="••••••••">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="confirmar_contrasena">Confirmar Contraseña</label>
                    <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="••••••••">
                </div>
                <button type="submit" class="w-full bg-secondary text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition-colors">
                    Crear Cuenta
                </button>
            </form>
            
            <div class="text-center mt-4">
                <a href="login.php" class="text-primary hover:text-red-700 font-medium">
                    ¿Ya tienes cuenta? Inicia sesión
                </a>
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
    
    </body>
</html>