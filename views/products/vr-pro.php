  <main class="container product-page">
    <h1>Gafas VR Pro</h1>
    <div class="product-page-container">
      <div class="img-carousel" id="img-carousel">
        <div class="img-carousel-btns one" id="carousel-btns">
          <div class="img-carousel-btn none" id="prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentcolor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
          </div>
          <img src="/assets/imgs/VR Gloves/glove-conceptual.png" alt="imagen del producto" id="carousel-img">
          <div class="img-carousel-btn none" id="next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentcolor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
          </div>
        </div>
        <div class="img-carousel-indexs" id="carousel-indexs">
        </div>
      </div><!-- img-carousel -->
      <div class="product-status">
        <h2 class="product-status-price">799.99€</h2>
        <div class="product-status-items">
          <div class="product-status-item">
            <div class="circle --circle-2"></div>
            <div class="product-status-item-info">
              <h4><span class="text-green">Disponible online</span></h4>
              <p>Entrega lo antes posible</p>
            </div>
            <p class="produc-status-item-price">+5.00€</p>
          </div><!-- product-status-item -->
          <div class="product-status-item">
            <div class="circle"></div>
            <h4 class="product-status-item-info text-darkgray">Recogida en tienda</h4>
            <p>Gratis</p>
          </div><!-- product-status-item -->
        </div>
        <a class="btn product-status-btn" href="/comprar?id=2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentcolor" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
          Comprar
        </a>
      </div><!-- product-status -->
    </div>
  </main><!-- product-page -->
  <div class="container text-container">
    <div class="line">
      <p class="bold">Pantalla:</p>
      <p>Paneles duales LCD 7,3 cm</p>
    </div>
    <div class="line">
      <p class="bold">Resolución:</p>
      <p>2448 x 2448 píxeles por ojo (4896 x 2448 píxeles combinados)</p>
    </div>
    <div class="line">
      <p class="bold">Frecuencia de actualización:</p>
      <p>120 Hz</p>
    </div>
    <div class="line">
      <p class="bold">Campo de visión:</p>
      <p>Hasta 140º</p>
    </div>
    <div class="line">
      <p class="bold">Audio:</p>
      <ul>
          <li>Micrófonos duales con cancelación de eco absoluta</li>
          <li>2x altavoces direccionales</li>
          <li>Conexión de salida de audio de 3,5 mm con alta resolución</li>
      </ul>
    </div>
    <div class="line">
      <p class="bold">Conexiones:</p>
      <ul>
        <li>3x liuertos lieriféricos de USB 3.2 Gen-1 Tilio C</li>
        <li>Bluetooth 5.2 + BLE</li>
        <li>Wi-Fi 802.11ax</li>
      </ul>
    </div>
    <div class="line">
      <p class="bold">Sensores:</p>
      <ul>
        <li>6x cámaras de seguimiento</li>
        <li>Sensor G (medir velocidad)</li>
        <li>Giroscopio</li>
        <li>Sensor de proximidad</li>
      </ul>
    </div>
    <div class="line">
      <p class="bold">Batería:</p>
      <ul>
        <li>Hasta 16 horas</li>
        <li>Batería recargable integrada (se carga mediante USB-C)</li>
      </ul>
    </div>
  </div><!-- text-container -->
<script>
  let imgs = false;
  fetch("/imgs/vr-pro")
  .then(res=>res.ok? res.json(): Promise.reject(res))
  .then(data=>imgs=data)
  .catch(err=>console.log(err))
</script>
