<?php

$equation = $_POST['equation'];
$number1 =  $_POST['number1'];
	
echo $x. " is the answer<br/>";

?>

<html>
	
	<head>
		
		<title>Graph app</title>
		
	</head>
	
	<body>
		
		<form method = "post1">
			
			Enter equation y= <input type="text" equation="equation" />
			
			<br/>
			
			<input type = "submit" value ="send" />
			
		</form>
		
		<form method = "post2">
			
			Solve for: <input type="text" number1="number1" />
			
			<br/>
			
			<input type = "submit" value ="send" />
			
		</form>
		
		
		
	</body>
</html>