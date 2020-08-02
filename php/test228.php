<?php

	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Fatal Error");

	$stmt = $conn -> prepare('insert into classics values(?,?,?,?,?)');
	$stmt -> bind_param('sssss', $author, $title, $category, $year, $isbn);

	$author = 'Emily Bronte';
	$title = 'Wuthering Heights';
	$category = 'Fiction';
	$year = '1847';
	$isbn = '9781598184897';

	$stmt -> execute();

	printf("Row inserted. %d\n", $stmt -> affected_rows);
	echo gettype($stmt -> affected_rows);


	$stmt -> close();
	$conn -> close();


	



?>