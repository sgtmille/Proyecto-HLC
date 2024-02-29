<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/app.css">
  <link rel="shortcut icon" href="/assets/imgs/logo.ico" type="image/x-icon">
  <title>Inicio de Sesion</title>
</head>
<body class="form-page">
  <p class="prev-page" id="prev-page">Atrás</p>
  <div class="form-container --form-login">
    <form action="/login_con_sesion/logica/loguear.php" id="form-login"method="POST">
      <h2 class="form-title">Iniciar Sesión</h2>
      <div class="form-content">
        <div>
          <label><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentcolor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>Usuario</label>
          <div class="box-container">
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
          </div>
        </div>
        <div>
          <label><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentcolor" d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>Clave</label>
          <div class="box-container">
            <div class="password-input">
            <input type="password" name="password" placeholder="password" required>
            <div class="btn-password">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentcolor" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
            </div>
          </div>
          </div>
        </div>
      </div><!-- form-content -->
      <div class="form-options">
        <a class="text-primary-color" href="/registro">Crear Cuenta</a>
        <input class="btn" type="submit" value="Iniciar sesion">
      </div>
    </form><!-- form -->
  </div>
  <template id="template-alert">
    <div class="alert">
      <div class="alert__content">
        <div class="btn-close --no-margin --no-padding">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentcolor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </div>
          <h2 class="title --no-margin">Importante!!!</h2>
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima porro culpa perspiciatis sit nam exercitationem officiis, sapiente perferendis at dolore fugit voluptatum velit quisquam necessitatibus reiciendis labore ab suscipit eveniet!</p>
        <button class="cb">Aceptar</button>
      </div>
    </div>
  </template>
  <script src="/assets/js/form.js" type="module"></script>
</body>
</html>
