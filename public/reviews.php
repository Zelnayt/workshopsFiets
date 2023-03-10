

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/reviews.css">
</head>

    <body>

    <div class="revBox">
        <h1>Reviews</h1>
    </div>

<div class="box2">
<!-- Swiper -->
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    <div class="swiper-slide">Slide 4</div>
    <div class="swiper-slide">Slide 5</div>
  
  </div>
  <div class="swiper-pagination"></div>
</div>

</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>

</body>

        
    

