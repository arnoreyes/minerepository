<?php
include 'dubdatabase;
';

if(isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nombre, email, password) VALUES ('$nombre', '$correo', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado con éxito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

if(isset($_POST['inicio_sesion'])) {
    $correo = $_POST['correo_inicio'];
    $contraseña = $_POST['contraseña_inicio'];

    $sql = "SELECT * FROM users WHERE email='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if(password_verify($contraseña, $row['password'])) {
            echo "Inicio de sesión exitoso!";
        } else {
            echo "Contraseña incorrecta!";
        }
    } else {
        echo "Correo electrónico no encontrado!";
    }
    $conn->close();
}
?>
