<?php
	echo fix_names("WILLIAM", "henry", "gatES");
	function fix_names($n1, $n2, $n3){
		$n1 = ucfirst(strtolower($n1));
		$n2 = ucfirst(strtolower($n2));
		$n3 = ucfirst(strtolower($n3));
		return $n1 . " " . $n2 . " " . $n3;
	}
	// echo 1;
	echo "<br>";
	$r= new Furi();
	echo $r -> A();
	echo "<br>";
	echo Furi::$a;
	class Furi{
		static $a="М-да";
		public $name=1, $password;
		function A(){
			return self::$a;
		}
	}
	echo "<br>";
	$v = "sdf";
	echo $v;
	echo "<br>";
	$v = array($v);
	echo " $v[0] "."е был я";
	echo "<br>";
	echo $v;
	echo "<br>";
	$c=0;
	if ($c=1){
		echo "Это строка " . __LINE__ . " в файле " . __FILE__;
	}




	echo "<br>";
	print_r($r);

	

	switch($c){
		
		case 7:
			echo "<br>";
			echo "Это строка " . __LINE__ . " в файле " . __FILE__;
			break;
		case 2:
			echo "<br>";
			echo "Это строка " . __LINE__ . " в файле " . __FILE__;
			break;
		case 3:
			echo "<br>";
			echo "Это строка " . __LINE__ . " в файле " . __FILE__;
			break;
		default:
			echo "<br>";
			echo "Это строка " . __LINE__ . " в файле " . __FILE__;
			break;

	}

	echo "<br>";
	// phpinfo();
	Translate::lookup();
 	class Translate
 	{
 		const ENGLISH = 0;
 		const SPANISH = 1;
 		const FRENCH = 2;
 		const GERMAN = 3;
 
 		Static function lookup()
		{
 			echo self::SPANISH;
 		}
 	}
 	
 	echo "<br>";



	$paper = array("Copier", "Inkjet", "Laser", "Photo");
	$j = 0;
	foreach ($paper as $item)
	{
		echo "$j: $item<br>";
		++$j;
	}

	echo "<br>";
	list($a, $b) = array('Alice', 'Bob');
    echo "a=$a b=$b";echo "<br>";


    $paper = array(							
    	'copier' => "Copier & Multipurpose",
 		'inkjet' => "Inkjet Printer",
 		'laser' => "Laser Printer",
 		'photo' => "Photographic Paper");
 	while (list($item, $description) = each($paper))
 	{
 		echo "$item: $description<br>";
 	}	echo "<br>";
 	echo time();echo "<br>";
 	echo date(DATE_COOKIE);echo "<br>";

 	$abc = 3;
 	echo $abc; echo "<br>";
 	$acb = 4;
 	echo $acb; echo "<br>";
 	echo($abc != $acb);echo "<br>";
 	echo 8; echo "<br>";
 	// echo $bca; echo "<br>";



 	



	
?>