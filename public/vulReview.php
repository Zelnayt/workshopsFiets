<?php include_once("header.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>VulReview</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="Reviews"> 
	<h1>Reviews</h1>
	<form method="post">
		<label>Naam:</label>
		<input type="text" name="naam" required>

        <select id="onderwerp" name="onderwerp">
            <option value="0">Onderwerp:</option>
            <option value="1">klantenvriendelijkheid</option>
            <option value="2">kwaliteit</option>
            <option value="3">Prijzen</option>
            <option value="4">Anders</option>
        </select>

		<label>Bericht:</label>
		<textarea id="textarea" name="textarea" rows="4" cols="50"> </textarea>
		<input type="submit" name="doorsturen" value="doorsturen">
	</form>
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
if (isset($_POST['doorsturen'])) {
    $db = new mysqli('localhost', 'root', '', 'fietsenwinkel');
    // Verzamel de ingevoerde gegevens
    $naam = $_POST['naam'];
    $onderwerp = $_POST['onderwerp'];
    $textarea = $_POST['textarea'];
  

    // Voeg de nieuwe review toe aan de database
    $sql = "INSERT INTO review (naam, onderwerp, textarea) VALUES ('$naam', '$onderwerp', '$textarea')";
    $db->query($sql);
    echo "U review is verstuurd!";
    header("Location: vulReview.php");
     exit;
    }

?>

