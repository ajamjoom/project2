<?php
//ink to dictionary..
//cut down on some code and add comment all over
//try bootsrap
//validate

$words = array(
	'i', 
	'james', 
	'jordan', 
	'usa', 
	'zoo', 
	'harvard', 
	'stanford', 
	'saudi', 
	'calculator', 
	'notebook', 
	'wiggle', 
	'chinmay', 
	'abdul', 
	'love', 
	'hat', 
	'naked', 
	'green', 
	'machine', 
	'boosted'
	);
$number = rand(1,1000);
$symbol = array('!', '@', '#', '$', '%', '^', '&', '*','~', '=', '+', '(', ')', '{', '}');
$password = '';

foreach($_POST as $value => $key){
	
	if( $value == "number_of_words"){
		for($i = 0; $i < $_POST[$value]; $i++){

			if($i == 0){
				$password .= $words[rand(0, 18)];
		}
		else{
			$password .= '-'.$words[rand(0, 18)];

		}
		}
	}

	if($value == "add_number"){
			if( $key == "on"){
				$password .= $number;
			}
			
	}

	if($value == "add_symbol"){
			if($key == "on"){		
				$password .= $symbol[rand(0, 14)];

			}
	}
//fix or understand how this code is working well or is  it?
	if($value == "caps_first_letter"){
			if($key == "on"){		
				$password = ucwords($password);

		}
	}
}
//getting list of words from outside sources doesn't work yet
$wordlist = '';
for ($i=1, $j = 2; $i <= 29; $i = $i+2,$j=$j+2 ) { 
	
	if($i<9 && $j<10){
		$wordlist .= file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-0'.$i.'-0'.$j.'-hundred.html');
	}
	
	elseif($i == 9 && $j==10){
		$wordlist .= file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-0'.$i.'-'.$j.'-hundred.html');

	}

	else{
		$wordlist .= file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-'.$i.'-'.$j.'-hundred.html');
	}
}




















