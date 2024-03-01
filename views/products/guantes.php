  <main class="container product-page">
    <h1>Dreamtech Gloves</h1>
    <section class="product-page-container">
      <div class="product-imgs">
        <img id="mainImage"alt="Product Image">
        <ul id="imagesCarousel">
          <li class="selected"><imgalt="Carousel Image 1"></li>
          <li><img></li>
          <li><img></li>
          <li><img></li>
        </ul>
      </div><!-- product-imgs -->
      <div class="product-info">
        <div class="price">
          <h3>$590.99</h3>
          <p>IVA incl. Envío gratis</p>
        </div>
        <div class="financing">
          <div>
            <h4>Financiamiento: En 12 cuotas**</h4>
            <a href="#">Simula tu financiamiento</a>
          </div>
          <p>$49.25<br><span>Mensual</span></p>
        </div>
        <ul class="shipment">
          <li>
            <span></span>
            <div>
              <h4>Disponible online</h4>
              <p>Entrega 08/02/2024</p>
            </div>
            <p>+$0.00</p>
          </li>
          <li>
            <span></span>
            <div>
              <h4>Retiro en tienda</h4>
              <p>Selecciona tu tienda</p>
            </div>
            <p>+$0.00</p>
          </li>
        </ul>
        <button class="buy-btn">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Agregar al carrito</span>
        </button>
      </div><!-- product-info -->
    </section><!-- product-page-container -->
  </main><!-- product-page -->
  <section class="container text-container">
    <div class="line">
      <p class="bold">Pantalla:</p>
      <p>Paneles duales LCD 7,3 cm</p>
    </div>
    <div class="line">
      <p class="bold">Resolución:</p>
      <p>1632 x 1632 píxeles por ojo (3264 x 1632 píxeles combinados)</p>
    </div>
    <div class="line">
      <p class="bold">Frecuencia de actualización:</p>
      <p>80 Hz</p>
    </div>
    <div class="line">
      <p class="bold">Campo de visión:</p>
      <p>Hasta 120º</p>
    </div>
    <div class="line">
      <p class="bold">Audio:</p>
      <ul>
        <li>Micrófonos duales con cancelación de eco media</li>
        <li>2x altavoces direccionales</li>
        <li>Conexión de salida de audio de 3,5 mm con media resolución</li>
      </ul>
    </div>
    <div class="line">
      <p class="bold">Conexiones:</p>
      <ul>
        <li>2x puertos periféricos de USB 3.2 Gen-1 Tipo C</li>
        <li>Bluetooth 5.1</li>
        <li>Wi-Fi 802.11ac</li>
      </ul>
    </div>
    <div class="line">
      <p class="bold">Sensores:</p>
      <ul>
        <li>4x cámaras de seguimiento</li>
        <li>Sensor G (medir velocidad)</li>
        <li>Giroscopio</li>
        <li>Sensor de proximidad</li>
      </ul>
    </div>
    <div class="line">
    <p class="bold">Batería:</p>
      <ul>
        <li>Hasta 8 horas</li>
        <li>Batería recargable integrada (se carga mediante USB-C)</li>
      </ul>
    </div>
  </section><!-- text-container -->

<script>
  let imgs = false;
  fetch("/imgs/vr-gloves")
  .then(res=>res.ok? res.json(): Promise.reject(res))
  .then(data=>imgs=data)
  .catch(err=>console.log(err))
</script>
