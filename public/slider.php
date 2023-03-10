<html>

  <head>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  </head>

  <body>


    <div class="box"> 
    <!-- Swiper -->
  <div class="swiper mySwiper">

    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/Slider1.png" />
      </div>
      <div class="swiper-slide">
        <img src="images/Slider2.png" />
      </div>
      <div class="swiper-slide">
        <img src="images/Slider3.png" />
      </div>
    </div>
    
    <div class="swiper-pagination"></div>
  </div>
</div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "cube",
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

  </body>


</html>
