<?php

if($_POST)
{
	
	$operation = $_POST['operation'];
	$number1 = $_POST['number1'];
	$number2 =  $_POST['number2'];

	if($operation == "+")
	{
		$x = $number1 + $number2;
	}

	if($operation == "-")
	{
		$x = $number1 - $number2;
	}
	
		if($operation == "x")
	{
		$x = $number1 * $number2;
	}
	
		if($operation == "/")
	{
		$x = $number1 / $number2;
	}	
	
	
	echo $x. " is the answer<br/>";
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
			
			<select name = "operation">
				<option value = "+">+</option>
				<option value = "-">-</option>
				<option value = "x">x</option>
				<option value = "/">/</option>
			</select>
			
			<br/>
			
			Enter second number: <input type="number" name="number2" />
			
			<br/>
			
			
			<input type = "submit" value ="send" />
			
		</form>
		

	</body> 
</html>