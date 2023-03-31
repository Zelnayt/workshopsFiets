<!DOCTYPE html>
<html>
<head>
	<title>Fietsen</title>
	<link rel="stylesheet" type="text/css" href="herenfietsen.php">
</head>
<body>
	<div class="container">
		<?php

			// Connectie maken met de database
			$db = new mysqli('localhost', 'root', '', 'fietsenwinkel');

			if (!$db) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			// Query om de gegevens van de fietsen op te halen
			$sql = "SELECT * FROM fietsen";
			$result = mysqli_query($db, $sql);

			// Loop door de resultaten heen en toon de fietsen
			while($row = mysqli_fetch_assoc($result)) {
				echo '<div class="vak">';
				echo '<img src="' . $row['img'] . '">';
				echo '<p>Naam: ' . $row['merk'] . '</p>';
				echo '<p>Type: ' . $row['model'] . '</p>';
				echo '<p>Kleur: ' . $row['kleur'] . '</p>';
                echo '<p>bouwjaar: ' . $row['bouwjaar'] . '</p>';
				echo '</div>';
			}

			// Sluit de databaseverbinding
			mysqli_close($db);
		?>
	</div>
</body>
</html>