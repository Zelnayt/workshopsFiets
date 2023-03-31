
<html lang="en">
<head>
    <link rel="stylesheet" href="css/reviews.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <div class="revBox">
        <h1>Reviews</h1>
    </div>

    <div class="box2">
        <!-- Swiper -->
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">

                <?php
                // Maak een verbinding met de database en haal de reviews op
                $db = new mysqli('localhost', 'root', '', 'fietsenwinkel');
                $query = "SELECT naam, onderwerp, textarea FROM review";
                $result = mysqli_query($db, $query);

                // Loop door de reviews en maak een HTML-structuur voor elke slide
                while ($row = mysqli_fetch_assoc($result)) {
                    $naam = $row['naam'];
                    $onderwerp = $row['onderwerp'];
                    $review_tekst = $row['textarea'];

                    echo '<div class="swiper-slide">';
                    echo '<h3>' . $naam . '</h3>';
                    echo '<h4>' . $onderwerp . '</h4>';
                    echo '<p>' . $review_tekst . '</p>';
                    echo '</div>';
                }
                ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialiseer de Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper2", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>
</html>

        
    

