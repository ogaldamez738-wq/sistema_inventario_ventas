<?php
session_start();
// Si el usuario ya está logueado, redirigir al inicio (o a otra página)
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Configuración de la Base de Datos (¡MODIFICA ESTOS VALORES SI ES NECESARIO!)
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'sevensport_db';

// Mensajes para el usuario
$error_message = "";

// Manejar redirect opcional (puede venir por POST desde index.php o por GET)
$redirect_after_login = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['redirect'])) {
    $redirect_after_login = trim($_POST['redirect']);
} elseif (isset($_GET['redirect'])) {
    $redirect_after_login = trim($_GET['redirect']);
}

// Conexión a la Base de Datos
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Verificar la conexión
if ($conn->connect_error) {
    $error_message = "Error de conexión a la base de datos: " . $conn->connect_error;
} else {
    // Procesar el formulario de Login solo si vienen las credenciales
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['contrasena'])) {
        $email = trim($_POST['email']);
        $contrasena = $_POST['contrasena'];

        if (empty($email) || empty($contrasena)) {
            $error_message = "Todos los campos son obligatorios.";
        } else {
            // 1. Buscar usuario por email
            $stmt = $conn->prepare("SELECT ID_de_usuario, nombre_de_usuario, contrasena_hash FROM usuario_regi WHERE correo_de_usuario = ?");
            if ($stmt) {
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows == 1) {
                    $stmt->bind_result($user_id, $user_name, $contrasena_hash);
                    $stmt->fetch();

                    // 2. Verificar la contraseña con el hash
                    if (password_verify($contrasena, $contrasena_hash)) {
                        // Contraseña correcta, iniciar sesión
                        $_SESSION['user_id'] = $user_id;
                        $_SESSION['user_name'] = $user_name;
                        $_SESSION['logged_in'] = true;

                        // Redirigir al destino si existe, sino al index
                        if (!empty($redirect_after_login)) {
                            header("Location: " . $redirect_after_login);
                        } else {
                            header("Location: index.php");
                        }
                        $stmt->close();
                        $conn->close();
                        exit();
                    } else {
                        $error_message = "Credenciales incorrectas. Vuelve a intentarlo.";
                    }
                } else {
                    $error_message = "Credenciales incorrectas. Vuelve a intentarlo.";
                }
                $stmt->close();
            } else {
                $error_message = "Error en la consulta: " . $conn->error;
            }
        }
    }
    // No cerrar la conexión aquí si queremos usarla más tarde (se cerrará al final)
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - SEVENSPORT</title>
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

    <section class="bg-gray-100 min-h-screen flex items-center justify-center py-16">
        <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-md">
            <div class="text-center mb-6">
                <div class="text-4xl text-primary mb-2">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Iniciar Sesión</h2>
                <p class="text-gray-600">Bienvenido de vuelta</p>
            </div>

            <?php if ($error_message): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">¡Error!</strong>
                    <span class="block sm:inline"><?php echo $error_message; ?></span>
                </div>
            <?php endif; ?>

            <form id="loginForm" action="login.php" method="POST">
                <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($redirect_after_login); ?>">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="tu@email.com">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="••••••••">
                    <div class="text-right mt-2">
                        <a href="#" class="text-gray-500 hover:text-primary text-sm">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <button type="submit" class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                    Iniciar Sesión
                </button>
            </form>
            
            <div class="text-center mt-4">
                <p class="text-gray-600">¿No tienes cuenta? <a href="register.php" class="text-secondary hover:text-blue-800 font-medium">Regístrate aquí</a></p>
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
    <?php if (isset($conn) && $conn instanceof mysqli) $conn->close(); ?>
</body>
</html>
