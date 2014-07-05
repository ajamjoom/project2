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
				<!-- limit of 10 isn't working-->
				<label for='number_of_words'>Number of Words:</label>
				<input maxlength=10 type='text' name='number_of_words' id='number_of_words' value=''>  (Max 10)
				<br>
					
				<input type='checkbox' name='add_number' id='add_number' > 
				<label for='add_number'>Add a number</label>
				<br>

				<input type='checkbox' name='add_symbol' id='add_symbol' > 
				<label for='add_symbol'>Add a symbol</label>
	</p>
		
				<input type='submit' value='Generate Password'>
</form>
<img src = "images/password_strength.png" alt = "sketch of password strength in a xkcd password generator">
</body>
</html>