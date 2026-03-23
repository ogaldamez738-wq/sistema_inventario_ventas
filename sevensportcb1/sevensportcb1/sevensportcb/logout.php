<?php
session_start();

// Destruye todas las variables de sesión
$_SESSION = array();

// Si se desea destruir la cookie de sesión, también
// es necesario llamar a session_regenerate_id().
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruye la sesión
session_destroy();

// Redirige al login.php (o a index.php si lo prefieres)
header("Location: login.php");
exit();
?>