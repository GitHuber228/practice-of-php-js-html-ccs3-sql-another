<?php
	
	echo <<< _END
	<html>
		<head>
			<title>From test</title>
		</head>
		<body>
			<form method = "post" action = "formtest.php">
				Як Вас зовут?
				<input type = "text" name = "name">
				<input type = "hidden" name = "value">
				<input type = "submit"><br>
			</from>
		</body>
	</html>
	_END;	
	
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	
	if(!$name && isset($_POST['value'])){
		echo "Имя не введено, увы, ты лох" . "<br>";
	}
	if($name && isset($_POST['value'])){
		echo "Вас зовут:" . $name . "<br>";
	}
	echo "<br>";

	


?>