<!DOCTYPE html>
<html>
<head>

	<title>xkcd Password Generator</title>
	
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='style.css' type='text/css'>
	<?php require 'logic.php'; ?>



</head>
<body>
<h1>xkcd Password Generator</h1>

<div class = "password"><?php echo $password ?></div>

<form action='index.php' method='POST'>
	<p>
				<!--upper case first letter or no-->
				<label for='number_of_words'>Number of Words:</label>
				<select name = 'number_of_words'>
					<option value ='2'>2</option>
					<option value ='3'>3</option>
					<option value ='4'>4</option>
					<option value ='5'>5</option>
					<option value ='6'>6</option>
					<option value ='7'>7</option>
					<option value ='8'>8</option>
					<option value ='9'>9</option>
					<option value ='10'>10</option>
				</select>

				<br>
					
				<input type='checkbox' name='add_number' id='add_number' > 
				<label for='add_number'>Add a number</label>
				<br>

				<input type='checkbox' name='add_symbol' id='add_symbol' > 
				<label for='add_symbol'>Add a symbol</label>
				<br>
								<!--better name-->

				<input type='checkbox' name='caps_first_letter' id='caps_first_letter' > 
				<label for='add_symbol'>Capitalize first letter</label>
	</p>
	<!-- Don't refresh the whole page rather just create and display the new password-->
				<input type='submit' value='Generate Password'>
</form>
<img src = "images/password_strength.png" alt = "sketch of password strength in a xkcd password generator">
<!-- design and corrct place...-->
<p class = "description"> xkcd password generators are.....</p>
</body>
</html>