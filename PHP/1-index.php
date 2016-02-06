<?php
		
	# Comments Are #
	$test="I\"m a variable!!";
	$test2="I'm a variable!!";
	$test3="Me too!!!";
	$num=75;
	$name="Lang";
	$a = "name";

	$myArray = array("Pizza","Pie","Cake");
	$myArray2[0] = "Hello ";
	$myArray2[1] = "World!";

	$thirdArray = array(
		"France" => "French",
		"Germany" => "German",
		"Mexico" => "Spanish"
		);

	$myArray2[] = "Im great";
	
	echo $test;
	echo "<br />";
	echo $test2;
	echo "<br />";
	echo $test3;
	echo "<br />";
	echo $numb;
	echo "My name is $name";
	echo $num;
	echo "<br />";
	echo $test2.$test3;
	echo "My name is ".$name;
	echo "<br />";
	echo $$a;

	echo "<br /><br />";

	echo "$myArray[1]";
	echo "<br />";
	print_r($myArray);
	echo "<br />";
	print_r($myArray2);
	echo "<br />";
	echo $myArray2[0].$myArray2[1];
	
	echo "<br /><br />";
	print_r($thirdArray);
	echo "<br />";
	echo $thirdArray["Mexico"];

	unset($thirdArray["France"]);
	print_r($thirdArray);

	if ($num==75 AND $num==74) {
		echo "<br />";
		echo "True";
	} 
	else {
		echo "<br />";
		echo "False";
	}

	echo "<br />";
	for ($i=0; $i <=10 ; $i++) { 

		echo "$i"."<br />";
	}

	echo "<br /><br />";
	$newArray = array("cat","dog","horse","hampster");
	foreach ($newArray as $key => $value) {
		echo "Key: $key Value: $value <br />";
		}

	$j=0;	
	while ($j<= 15) {
		echo "$j <br />";
		$j++;

	}
	echo "<br />";
	$j=0;	
	while ($myArray2[$j]) {
		echo $myArray2[$j]."<br />";
		$j++;
	}
	
	
?>