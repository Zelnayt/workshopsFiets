   
<?php include_once("header.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Inloggen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="containerInlog"> 
<div class="inloggen"> 
	<h1>Inloggen</h1>
	<form method="post">
		<label>E-mail:</label>
		<input type="email" name="email" required>
		<label>Wachtwoord:</label>
		<input type="password" name="wachtwoord" required>
		<input type="submit" name="inloggen" value="Inloggen">
	</form>
</div>

<div class="registeren"> 
	<h1>Registeren</h1>
	<form method="post">
		<label>Voornaam:</label>
		<input type="text" name="voornaam" required>
		<label>Achternaam:</label>
		<input type="text" name="achternaam" required>
		<label>Email:</label>
		<input type="email" name="email" required>
		<label>Wachtwoord:</label>
		<input type="password" name="wachtwoord" required>
		<input type="submit" name="registreren" value="Registreren">
	</form>
</div>

</div>
</body>

<div style="
    bottom: 0;
    left: 0;
	height: 250px;
    width: 100%;">
	<?php include_once("footer.php");?>
</div>
</html>

<?php
if (isset($_POST['inloggen'])) 
{$db = new mysqli('localhost', 'root', '', 'fietsenwinkel');
	// Verzamel de ingevoerde gegevens
	$email = $_POST['email'];
	$wachtwoord = $_POST['wachtwoord'];

	// Controleer of de ingevoerde gegevens overeenkomen met de gegevens in de database
	$result = $db->query("SELECT * FROM user WHERE email='$email' AND wachtwoord='$wachtwoord'");
	

    if ($result->num_rows == 1) {
		echo "U bent ingelogd";
        header("Location: index.php");
        exit;
    }

}
?>

<?php
if (isset($_POST['registreren'])) {
    $db = new mysqli('localhost', 'root', '', 'fietsenwinkel');
    // Verzamel de ingevoerde gegevens
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    // Controleer of het opgegeven e-mailadres al in de database voorkomt
    $result = $db->query("SELECT * FROM user WHERE email='$email'");
    if ($result->num_rows > 0) {
        echo "Dit e-mailadres is al geregistreerd";
    } else {
        // Voeg de nieuwe gebruiker toe aan de database
        $db->query("INSERT INTO user (voornaam, achternaam, email, wachtwoord) VALUES ('$voornaam', '$achternaam', '$email', '$wachtwoord')");
        echo "U bent succesvol geregistreerd";
        header("Location: login.php");
        exit;
    }
}
?>

