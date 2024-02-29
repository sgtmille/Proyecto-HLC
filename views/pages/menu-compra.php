<?php 
  if(!isset($_GET["id"])) header("location: /");
  $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/app.css">
  <link rel="shortcut icon" href="/assets/imgs/logo.ico" type="image/x-icon">
  <title>Página de Registro</title>
</head>
<body class="form-page">
  <p class="prev-page" id="prev-page">Atrás</p>
  <div class="form-container">
    <form id="form-compra">
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
          <input type="tel" id="teléfono" name="tel" pattern=".{9,}"title="Introduce un número de teléfono válido"  minlength="9" maxlength="9" required />
        </div>
        <div class="form-group">
          <label for="compra">¿Recogida en tienda?</label>
          <select id="compra" name="compra" required>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
      </div><!-- form-content -->
      <input type="hidden" name="id_producto" value="<?php echo $id?>">
      <button type="submit">Finalizar</button>
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