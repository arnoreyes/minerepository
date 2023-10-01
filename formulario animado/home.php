<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Andev web - Validar formulario</title>
  <link rel="stylesheet" href="style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>
<body>
<form action="register.php" method="post">
  <div class="container" id="container">
    <div class="form-container register-container">
      <form action="process.php" method="POST" name="registro_form">
        <h1>Regístrate aquí</h1>
        <div class="form-control">
          <input type="text" id="username" name="nombre" placeholder="Nombre" required />
          <small id="username-error"></small>
          <span></span>
        </div>
        <div class="form-control">
          <input type="email" id="email" name="correo" placeholder="Correo electrónico" required />
          <small id="email-error"></small>
          <span></span>
        </div>
        <div class="form-control">
          <input type="password" id="password" name="contraseña" placeholder="Contraseña" required />
          <small id="password-error"></small>
          <span></span>
        </div>
        <button type="submit" name="registro" value="submit">Registrar</button>
        <span></span>
      </form>
    </div>

    <div class="form-container login-container">
      <form action="process.php" method="POST" name="inicio_sesion_form" class="form-lg">
        <h1>Inicia sesión aquí</h1>
        <div class="form-control2">
          <input type="email" class="email-2" name="correo_inicio" placeholder="Correo electrónico" required />
          <small class="email-error-2"></small>
          <span></span>
        </div>
        <div class="form-control2">
          <input type="password" class="password-2" name="contraseña_inicio" placeholder="Contraseña" required />
          <small class="password-error-2"></small>
          <span></span>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox" />
            <label for="">Recuérdame</label>
          </div>
          <div class="pass-link">
            <a href="#">¿Olvidaste la contraseña?</a>
          </div>
        </div>
        <button type="submit" name="inicio_sesion" value="submit">Iniciar sesión</button>
        <span>O usa tu cuenta</span>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="title">
            Hola <br />
            amigos
          </h1>
          <p>Si tienes una cuenta, inicia sesión aquí y diviértete</p>
          <button class="ghost" id="login">
            Iniciar sesión
            <i class="fa-solid fa-arrow-left"></i>
          </button>
        </div>

        <div class="overlay-panel overlay-right">
          <h1 class="title">
            Comienza tu <br />
            viaje ahora
          </h1>
          <p>
            Si aún no tienes una cuenta, únete a nosotros y comienza tu viaje
          </p>
          <button class="ghost" id="register">
            Registrarse
            <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <script src="main.js"></script>
</body>
</html>
