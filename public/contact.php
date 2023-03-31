<?php include_once("header.php");?>

<html lang="en">
<link rel="stylesheet" href="css/style.css">
<body>
    
    <div class="containerContact">
        <div class="contact">
            <h1>Contact</h1>
            <form method="post">
                <label>Naam:</label>
                <input type="text" name="naam" required>
                <label>E-mail:</label>
                <input type="text" name="email" required>
                <label>Onderwerp:</label>
                <input type="text" name="onderwerp" required>
                <label>Bericht:</label>
                <textarea name="bericht" id="input-contact" required></textarea>
                <input type="submit" name="verzenden" value="Verzenden">
            </form>
        </div>
    </div>

</body>
</html>

<?php include_once("footer.php");?>