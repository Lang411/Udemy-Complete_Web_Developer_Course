<!DOCTYPE html>
<html>
	<head>
		<title>Email PHP webpage</title>
		
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		  <style>
		  </style>
		  
	</head>
		
	<body>
		<h1>Forms with PHP variables stored in the URL!</h1>
		<!--Example:file:///C:/Users/lkenney/Desktop/CODE...
				.../scratchspacefortest.com/PHP/Form.php?name=Tom
		
		THIS IS REQUIRTED TO BE RUN ON A STATIC WEBSITE
		-->
		
	<div>

		
		
		<form method="post">
			<label form="name">Name</label>
			<input name="name" type="text" />
			
			<input type="submit" name="submit" value="Submit Your Name"/>
		</form>	
		
			<?php
			
			$names=array("Fred","Time","Lang");
			if ($_POST["submit"]){
				if ($_POST["name"]) {
					foreach ($names as $name){
						if ($_POST["name"]==$name){
							echo "I know you! Your name is ".$name;
							$knowYou=1;
						}
						
					}
					
				}
			}
			if ($knowYou) echo "I dont know you, ".$_POST['name'];
			else {
				echo "Please enter your name";
			}	
			?>	
		
	</div>
		
	</body>
</html>			  
		  	
		  	