<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/app.css">
  <link rel="shortcut icon" href="/assets/imgs/logo.ico" type="image/x-icon">
  <title>Página de Registro</title>
</head>
<body class="form-page" id="form-create">
  <p class="prev-page" id="prev-page">Atrás</p>
  <div class="form-container">
    <form action="">
      <h2 class="form-title">Crear Cuenta</h2>
      <p>El único limite es tu imaginacion</p>
      <div class="form-content">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" required />
        </div>
        <div class="form-group">
          <label for="apellido">Primer Apellido</label>
          <input type="text" id="apellido" name="apellido" required />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="dni">DNI</label>
          <input type="text" id="dni" name="dni" pattern="[0-9]{8}[A-Za-z]{1}" minlength="9" maxlength="9" title="Debe poner 8 números y una letra" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="password-input">
            <input type="password" name="password" pattern=".{9,}"title="Introduce un número de teléfono válido"  minlength="9" maxlength="9" required />
            <div class="btn-password">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentcolor" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="compra">Pais</label>
          <select id="pais" name="pais" required>
            <option value="" disabled selected></option>
            <option value="españa">España</option>
            <option value="china">China</option>
            <option value="francia">Francia</option>
            <option value="japon">Japón</option>
            <option value="alemania">Alemania</option>
            <option value="eeuu">EEUU</option>
          </select>
        </div>
      </div><!-- form-content -->
      <button type="submit">Crear</button>
    </form>
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
