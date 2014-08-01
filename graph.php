<?php
  include 'wa_wrapper/WolframAlphaEngine.php';
?>
<html>
	
	<head>
		
		<title>Graph app</title>
		
	</head>
	
	<body>
		
		<form method = 'POST' action='#'>
			
			Enter question: <input type="text" name="equ" value="<?php echo $_REQUEST['equ']; ?>">
			
			<input type="submit" name="Search" value="Search">
			
			<br/>
			
			<input type = "submit" value ="send" />
			
		</form>
		
<?php
  $appID = 'RALVW5-APUY2TRU8R';

  $engine = new WolframAlphaEngine( $appID );

  $response = $engine->getResults( $_REQUEST['equ'] );
  
?>

<br>

<?php
  // if there are any assumptions, display them 
  if ( count($response->getAssumptions()) > 0 ) {
?>
    <h2>Assumptions:</h2>
    <ul>
<?php
      // assumptions come as a hash of type as key and array of assumptions as value
      foreach ( $response->getAssumptions() as $type => $assumptions ) {
?>
        <li><?php echo $type; ?>:<br>
          <ol>
<?php
          foreach ( $assumptions as $assumption ) {
?>
            <li><?php echo $assumption->name ." ". $assumption->description;?> Did you mean? <a href="simpleRequest.php?equ=<?php echo urlencode($assumption->input);?>">If yes, click here</a></li>
<?php
          }
?>
          </ol>
        </li>
<?php
      }
?>
      
    </ul>
<?php
  }
?>

<hr>

<?php
  // if there are any pods, display them
  if ( count($response->getPods()) > 0 ) {
?>
    <h2>Results</h2>
    <table border=1 width="80%" align="center">
<?php
    foreach ( $response->getPods() as $pod ) {
?>
      <tr>
        <td>
          <h3><?php echo $pod->attributes['title']; ?></h3>
<?php
        foreach ( $pod->getSubpods() as $subpod ) {
?>
          <img src="<?php echo $subpod->image->attributes['src']; ?>">
          <hr>
<?php
        }
?>
          
        </td>
      </tr>
<?php
    }
?>
    </table>
<?php
  }
?>
		
		
	</body>
</html>

