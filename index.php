<!DOCTYPE html> 
<html>
	<?php
		require_once './includes/connection.inc.php';
	?>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<meta charset = "UTF-8">
		<title>Puzzles</title>

	</head>
	<body>

		<!-- Kopfzeile mit Links -->
		<div id = "menue">
			<ul>
			<li><a href="./sites/search.php">Suche</a></li>
			<li><a href="./sites/forum.php">Forum</a></li>
			<li><a href="./sites/faq.php">FAQ</a></li>
			</ul>
		</div>

		<!-- Profil/Login anzeige -->
		<div id = "profile">
			<table>
				<form action = "./sites/login.php" method = "post">
				
					<tr><td>Benutzername</td><td><input type = "text" name = "user"></td></tr>
					<tr><td>Passwort</td><td><input type = "text" name = "pass"></td></tr>
					<tr><td><input type = "submit" value = "login"></td>
					</form>
				<form action = "./sites/register.html" method = "post">
					<td><input type = "submit" value = "Registrieren"></td></tr>
			</table>
				</form>
		</div>


		<div id = "content">
			<p>Puzzles</p>
		</div>

		<!-- Upload Button verlinkt -->
		<div id = "upload">
			<a href="./sites/upload.php"><img src="./icons/upload.png" width = "128px" hight = "128px"></a></a>

		</div>

		<!-- Download Button verlinkt -->
		<div id = "download">
			<a href="./sites/download.php"><img src="./icons/download.png" width = "128px" hight = "128px"></a></a>
		</div>

		<!-- Footer einrichten AGBs etc... -->
		<div id = "footer">
			<ul>	
				<li><a href="./sites/contact.php">Kontakt</a></li>
				<li><a href="./sites/imprint.php">Impressum</a></li>
				<li><a href="./sites/agb.php">AGB</a></li>
			</ul>
		</div>
	</body>
	

</html> 
