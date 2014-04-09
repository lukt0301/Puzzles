<?php

	function checkInput($input) {

		// Tags werden entfernt
		$input = strip_tags($input);

		// Zeilenumbrüche werden entfernt
		$input = str_replace("\n", "", $input);

		// Leerzeichen vor und nach dem String werden entfernt
		$input = trim($input);

		return $input;
	}

	$username  = checkInput($_POST["Username"]);
	$prename   = checkInput($_POST["Prename"]);
	$name      = checkInput($_POST["Name"]);
	$email     = checkInput($_POST["Email"]);
	$password  = checkInput($_POST["Password"];)
	$password2 = checkInput($_POST["Password2"]);

	$error = array();
	$errorcount = 0;

	if (strlen($username < 3)) {
		array_push($error, "Der Benutzername muss laenger als 3 Zeichen sein");
		$errorcount++;
	}

	if ($password == "") {
		array_push($error, "Sie haben kein Passwort eingegeben");
		$errorcount++;
	}

	if ($password2 != $password) {
		array_push($error, "Die beiden Passwörter stimmen nicht überein");
		$errorcount++;
	}

	// Überprüfung der Email Adresse: Ein @ Zeichen muss vorhanden sein. Vor dem @ dürfen nur Buchstaben, Ziffern, Punkte, underlines, Bindestriche stehen. Das gleiche nach dem @ Zeichen (bis auf underlines) gefolgt von einem Punkt. Nach dem Punkt dürfen nur noch 2-4 Buchstaben folgen, keine Zahlen oder sonstigen Zeichen.

	if($email == "" || !preg_match('#^([a-zA-Z0-9\.\_\-]+)@([a-zA-Z0-9\.\-]+\.[A-Za-z][A-Za-z]{2,4})$#', $email)) {
		array_push($error, "Die eingegebene Email-Adresse ist falsch");
		$errorcount++;
	} 

	mysql_select_db("Puzzles");
	$query = "SELECT Username FROM Users";

	$userexist = 0;
	for ($i=0; $i < count($query); $i++) { 
		if($query[$i] == $username) {
			$userexist = 1;
			array_push($error, "Der Benutzername existiert bereits");
			$errorcount++;
		}
	}

	


	if ($errorcount == 0) {
		// Aufruf Seite Registrierung erfolgreich
		echo "<meta http-equiv ='refresh' content = 5; URL = 'anmelden_schreiben.php'> "
	}
	else {
		for ($i=0; $i < ; $i++) { 
			
		}

	}


?>