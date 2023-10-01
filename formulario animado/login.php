<?php
// Verificar credenciales y autenticar al usuario

if ($usuario_autenticado) {
    // Establecer la sesión del usuario
    session_start();
    $_SESSION['usuario'] = $nombre_de_usuario; // Guarda el nombre de usuario en la sesión
    header('Location: home.php'); // Redirige al usuario a la pantalla de inicio
    exit();
} else {
    // Si las credenciales no son válidas, muestra un mensaje de error y vuelve a la página de inicio de sesión
    $_SESSION['mensaje_error'] = 'Credenciales incorrectas';
    header('Location: index.php'); // Cambia 'index.php' al nombre de tu página de inicio de sesión
    exit();
}
?>
