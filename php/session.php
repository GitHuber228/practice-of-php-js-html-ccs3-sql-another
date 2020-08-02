<?php

	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Fatal Error");

	if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
		$un_temp = mysql_entities_fix_string($conn, $_SERVER['PHP_AUTH_USER']);
		$pw_temp = mysql_entities_fix_string($conn, $_SERVER['PHP_AUTH_PW']);
		$query = "select * from users where username = '$un_temp'";
		$result = $conn -> query($query);

		if (!$result){
			die ("User not found");
		}elseif ($result -> num_rows){
			$row = $result -> fetch_array(MYSQLI_NUM);

			$result -> close();

			if (password_verify($pw_temp, $row[3])){
				session_start();
				$_SESSION['forename'] = $row[0];
				$_SESSION['surname'] = $row[1];
				echo htmlspecialchars("$row[0] $row[1] :
					Hi $row[0], you are now logged in as '$row[2]'");
				die ("<p><a href = 'continue.php'>Щелкни здесь для продолжения</p>");
			}else{
				die ("Неверная комбинация логин-пароль1");
			}
		}else{
			die ("Неверная комбинация логин-пароль2");
		}
	}else{
		header('WWW-Authenticate: Basic realm = "Restricted Area"');
		header('HTTP/1.0 401 Unauthorized');
		die("Пожалуйста, введите имя пользователя и пароль");
	}

	$conn -> close();

	function mysql_entities_fix_string($conn,$string){
		return htmlentities(mysql_fix_string($conn,$string));
	}

	function mysql_fix_string($conn,$string){
		if (get_magic_quotes_gpc()){
			$string = stripslashes($string);
		}
		return $conn -> real_escape_string($string);
	}

	


?>