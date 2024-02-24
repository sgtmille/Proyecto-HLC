<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/assets/css/app.css">
  <link rel="shortcut icon" href="/public/assets/imgs/logo.ico" type="image/x-icon">
  <title>Inicio de Sesion</title>
</head>
<body class="form-page">
  <p class="prev-page" id="prev-page">Atrás</p>
  <div class="form-container --form-login">
    <form action="/public/login_con_sesion/logica/loguear.php" method="POST">
      <h2 class="form-title">Iniciar Sesión</h2>
      <div class="form-content">
        <div>
          <label><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentcolor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>Usuario</label>
          <div class="box-container">
            <input type="text" name="usuario" placeholder="Nombre de usuario">
          </div>
        </div>
        <div>
          <label><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentcolor" d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>Clave</label>
          <div class="box-container">
            <input type="password" name="clave" placeholder="Clave">
          </div>
        </div>
      </div><!-- form-content -->
      <div class="form-options">
        <a class="text-primary-color" href="/public/views/registro.php">Crear Cuenta</a>
        <button type="submit">Iniciar Sesion</button>
      </div>
    </form><!-- form -->
  </div>
  <script src="/public/assets/js/main.js" type="module"></script>
</body>
</html>
