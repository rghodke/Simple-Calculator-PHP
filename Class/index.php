<?php

if($_POST)
{
	$x = $_POST[number1] + $_POST[number2];
	
	echo "Hello ". $x. " to php tutorial<br/>";
}

?>

<html>
	
	<head>
		
		<title>Basic Calculator</title>
		
	</head>
	
	<body>
		
		<form method = "post">
			
			Enter first number: <input type="number" name="number1" />
			
			<br/>
			
			Enter second number: <input type="number" name="number2" />
			
			<br/>
			
			
			<input type = "submit" value ="send" />
			
		</form>
		

	</body> 
</html>