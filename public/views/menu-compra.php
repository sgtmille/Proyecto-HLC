<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/assets/css/app.css">
  <link rel="shortcut icon" href="/public/assets/imgs/logo.ico" type="image/x-icon">
  <title>Página de Registro</title>
</head>
<body class="form-page">
  <p class="prev-page" id="prev-page">Atrás</p>
  <div class="form-container">
    <form action="">
      <h2 class="form-title">Menú de Compra</h2>
      <p>El único limite es tu imaginacion</p>
      <div class="form-content">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" required />
        </div>
        <div class="form-group">
          <label for="apellido">Apellidos</label>
          <input type="text" id="apellido" name="apellido" required />
        </div>
        <div class="form-group">
            <label for="email">Email de contacto</label>
            <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="dni">DNI</label>
          <input type="text" id="dni" name="dni" pattern="[0-9]{8}[A-Za-z]{1}" minlength="9" maxlength="9" title="Debe poner 8 números y una letra" required />
        </div>
        <div class="form-group">
          <label for="teléfono">Nº de Télefono</label>
          <input type="teléfono" id="teléfono" name="teléfono" pattern=".{9,}"title="Introduce un número de teléfono válido"  minlength="9" maxlength="9" required />
        </div>
        <div class="form-group">
          <label for="compra">¿Recogida en tienda?</label>
          <select id="compra" name="compra" required>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
      </div><!-- form-content -->
      <button type="submit">Finalizar</button>
    </form>
  </div>
  <script src="/public/assets/js/main.js" type="module"></script>
</body>
</html>