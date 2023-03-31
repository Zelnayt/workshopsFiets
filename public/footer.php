<html lang="en">
    <link rel="stylesheet" href="css/style.css">
    <footer>
        <div id="footer-container">
            <div id="footer-left">
                <h3>Openingstijden</h3>
                <p>Maandag: 13:00 - 18:00</p>
                <p>Dinsdag: 09:00 - 18:00</p>
                <p>Woensdag: 09:00 - 18:00</p>
                <p>Donderdag: 09:00 - 18:00</p>
                <p>Vrijdag: 09:00 - 18:00</p>
                <p>Zaterdag: 09:00 - 17:00</p>
                <p>Zondag: Gesloten</p>
            </div>
            <div id="footer-right">
                <h3>Contact</h3>
                <p>Telefoon: 06-12345678</p>
                <p>Email: </p>
                <p>Adres: </p>
                <br>
                <h3>Nieuwsbrief</h3>
                <p>Schrijf je in voor de</p>
                <button id="nieuwsbrief">Nieuwsbrief</button>
            </div>
        </div>
    </footer>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Nieuwsbrief</h1>
            <br>
            <p class="modaltext">Voer hieronder uw email in om u in te schrijven voor de nieuwsbrief</p>
            <br>
            <form action="index.php" method="post">
                <input type="text" name="email" placeholder="Email">
                <input type="submit" name="submit" value="Verstuur">
            </form>
        </div>

</div>
    <script src="js/nieuwsbrief.js"></script>
</html>