<?php
//add symbols and link to dictionary..
//cut down on some code and add comment all over
//try bootsrap
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
$symbol = array('!', '@', '#', '$', '%', '^', '&', '*');
$password = '';

foreach($_POST as $value => $key){
	
	if( $value == "number_of_words"){
		//add "-" the seperator between the words
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
				$password .= $symbol[rand(0, 7)];

			}
	}
}
