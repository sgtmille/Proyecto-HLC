<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/imgs/logo.ico" type="image/x-icon">
    <title>Dreamtech</title>
    <link rel="stylesheet" type="text/css" href="/public/assets/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<nav class="nav <?php if($_SERVER["PHP_SELF"]=="/public/index.php")echo "--nav-inicio"?>" id="nav">
  <img src="/public/assets/imgs/Logo.png" class="logo --no-margin">
  <div class="menu">
    <a href="/public">Inicio</a>
    <div class="sub-menu-container hover-list" id="sub-menu-container">
      <a href="#product-section">Productos <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentcolor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg></a>
      <div class="sub-menu">
        <a href="/public/views/products/vr-basic.php">Dreamtech VR Basic</a>
        <a href="/public/views/products/vr-pro.php">Dreamtech VR Pro</a>
        <a href="/public/views/products/traje.php">Dreamtech Suit</a>
        <a href="/public/views/products/guantes.php">Dreamtech Gloves</a>
      </div>
    </div>
    <a href="/public/views/login.php">Iniciar Sesión</a>
    <a href="/public/views/suscripciones.php">Suscríbete</a>
    <a href="/public/views/about-us.php">Sobre Nosotros</a>

  </div><!-- menu -->
  <button class="mobile-menu" id="mobile-menu">
    <svg id="mobile-menu-show" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentcolor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
    <svg class="none" id="mobile-menu-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentcolor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
  </button>
</nav><!-- nav -->
<?php if($_SERVER["PHP_SELF"]=="/public/index.php"):?>
  <header>
    <video class="bg" autoplay muted loop>
      <source
        src="https://p16-platform-static-va.ibyteimg.com/tos-maliva-i-jo6vmmv194-us/pico_website_new/video/pico4_home_device_tvc_pc_0927.mp4"
        type="video/mp4">
    </video>
    <div class="content">
      <h1>DREAMTECH</h1>
      <h2>El unico limite es tu imaginación</h2>
      <a class="btn --btn-header" href="/public/views/login.php">Iniciar Sesión</a>
    </div>
  </header>
<?php endif?>