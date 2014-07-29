<?php

if (!empty($_POST["equ"])) {
    echo "Yes, equ is set";    
}else{  
    echo "N0, equ is not set";
}
?>

<html>
	
	<head>
		
		<title>Graph app</title>
		
	</head>
	
	<body>
		
		<form method = "post1">
			
			Enter equation y= <input type="text" name="equ" />
			
			<br/>
			
			<input type = "submit" value ="send" />
			
		</form>
		
		<form method = "post2">
			
			Solve for: <input type="text" name="number1" />
			
			<br/>
			
			<input type = "submit" value ="send" />
			
		</form>
		
		
		
	</body>
</html>