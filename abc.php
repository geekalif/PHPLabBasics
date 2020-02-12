<?php

	// $a=10;
	// $b = "test";
	// $c = true;

	//(1)

	// $abc = [4];
	// $xyz = array(4);  //no value assigned but space allocated
	// echo $abc[0];  //index array

	//(2)
	// $student = ['name'=>'yourName', 'id'=>'12-12345-3'];  //associative array
	// echo $student['name'];


	//(3) 2d Index array

	// $students1 = [ 
	// 	['ABC','webtech',3.6], 
	// 	['XYZ', 'Database', 3.9], 
	// 	['GHI', 'ATP-3',2.1], 
	// 	['IJH', 'ICS', 1.5] 
	// ];

	// echo $students1[3][1];

	//(4) //Index and Associative array 

	// $students = [ 
	// 	's1' =>[ 'name' =>'ABC', 'course' =>'webtech', 'cgpa' =>3.6], 
	// 	's2' =>['name' =>'XYZ', 'course' =>'Database', 'cgpa' =>3.9], 
	// 	's3' =>['name' =>'GHI', 'course' =>'ATP-3','cgpa' =>2.1], 
	// 	's4' =>['name'=>'IJH', 'course'=>'ICS', 'cgpa' =>1.5] 
	// ];

	// echo $students['s1']['name'];  

	//(5) //function

	// function sum($a=0, $b=0){
	// 	return $a+$b;
	// }
	// echo sum();


	//(6) for loop

	// for($i=0;$i<5;$i++){
	// 	echo "<h3>webtech</h3> <br>";
	// }

	//for plain text printing html tag content: header('content-type: text/plain');


	//(7) concatanation

	// echo "Hello"."world <br>";

	// for ($i=0; $i < 5;) { 
	// 	$i++;
	// 	echo $i." .webtech <br>";
	// }

	//(8) type complexity

	// $a=10;
	// $b = "10";


	// if ($a == $b) {
	// 	 echo "true";
	// }
	// else{
	// 	 echo "false";
	// }

	// echo "<br>";

	// if ($a === $b) {
	// 	 echo "true";
	// }
	// else{
	// 	 echo "false";
	// }

	//(9) RANDOM

	$msg = "PHP is here";

	$val = print($msg);
	echo "<br>".$val;
	echo "<br>";
	//var_dump($val);  //for debugging purpose
	//phpinfo();  //for whole details

	//(10) RANDOM2

	// echo "<br>";

	// define("message", "Hello World x 3.1416");

	// echo message;

	//foreach

	//PHP Superglobal variable: very very important

	//(10) //Global //get //post

	$a=10;
	$b = 20;

	function sum(){
		return $GLOBALS['a']+$GLOBALS['b'];
	}

	echo sum();


?>


<!-- html css and js below here -->

<!DOCTYPE html>
<html>
<head>
	<title>PHP and HTML Page</title>
</head>
<body>
	<h1>PHP and HTML Page: <red> <?php echo $msg;?> </red> </h1>
</body>
</html>