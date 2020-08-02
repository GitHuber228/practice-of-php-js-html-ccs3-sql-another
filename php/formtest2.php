<?php
	setcookie('location', 'USA',time()-60*60*24*7,'/');
	if(isset($_COOKIE['location'])){
		$location = $_COOKIE['location'];
		echo $location . "<br>";
	}


	
	echo <<< _END
	<html>
		<head>
			<title>Fromtest2</title>
		</head>
		<body>
			<form method = "post" action = "formtest2.php">
				  Ванильное <input type ="checkbox" name = "ice[]" value = "Vanil">
				 Шоколадное <input type ="checkbox" name = "ice[]" value = "Shokolad">
				Земляничное <input type ="checkbox" name = "ice[]" value = "Zemlya">
				            <input type = "submit" name = "sub_formtest"><br> 
			</from>
			<form method = "post" action = "formtest2.php">
				      <label>25.36 <input type ="radio" name = "time" value = "Vanil"></label>
				      <label>23.25 <input type ="radio" name = "time" value = "Shokolad"></label>
				      <label>24.24 <input type ="radio" name = "time" value = "Zemlya"></label>
				            <input type = "image" src = "png.png" name = "sub_formtest2">
				            <input type = "hidden" name = "sub_formtest2"><br>
			</from>
			<form method = "post" action = "formtest2.php">
				<select>
					<option></option>
					<option value = "Горох">Горох</option>
					<option value = "Морковь">Морковь</option>
					<option value = "Капуста">Капуста</option>
					<option value = "Брокколи">Брокколи</option>
					<option value = "Фасоль">Фасоль</option>
				</select><br>
			</from>
			
		</body>
	</html>
	_END;

	if(isset($_POST['ice']) && isset($_POST['sub_formtest'])){
		$ice = $_POST['ice'];
		foreach ($ice as $key) {
			echo "$key<br>";
		}
	}

	if(isset($_POST['time']) && isset($_POST['sub_formtest2'])){
		$time = $_POST['time'];
		echo "$time<br>";
	}

	// echo "Старый пароль: 123456<br> Хеширванный пароль: " . password_hash("123456", PASSWORD_DEFAULT);
	$hash = '$2y$10$SpRdJb479A2qkPiL7G2oier1rpR3AnL916XU2zwHkhMTHaAe9RsHu';

	if(password_verify("123456", $hash)){
		echo "<br>" . "It`s normal<br>"; 
	}


	function sanitizeString($var){
		if (get_magic_quotes_gpc()){
			$var = stripcslashes($var);
		}
		$var = strip_tags(htmlentities($var));
		return $var;
	}
	function sanitizeSQL($conn , $var){
		$var = $conn -> real_escape_string($var);
		$var = sanitizeString($var);
		return $var;
	}


	

	


?>