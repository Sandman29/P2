<?php
/*
 *
 *  This program selects an xycd password for the user based on a selecting a 
 *	user specified number of item selected by the useer at p2/larrysandidge.com.
 * 
 *	Author: Lawrence "Larry" Sandidge
 *	Date last Modified: October 2, 2014
 *	Course: CSCI E-15 - Dynamic Web Development
 *  
 */
$wordList = Array('Apple','Banana','Pear', 'Pineapple','Strawberry', 'Blueberry',
					'Melon','Potato','Onion','Carrot','Lettuce','Cabbage', 'Celery',
					'Pepper','Salt','Pickle','Olive','Relish','Oats','Bread','Donut',
					'Pudding','Jello','Bagel','Egg','Bacon','Pork','Beef','Steak',
					'Chicken','Salmon','Fish','Tuna','Lobster','Shrimp','Milk',
					'Yogurt','Cheese','Butter','Pancake','Candy','Orange','Kiwi');
$specialChars = Array ('@','-','!','$','%','^','&amp;');
$password = "";
$thePassword = "";
$items = 0;
$hasNumber = "no";	

$items = $_GET['numItems'];

/*
 *  Validating the number of items to be atleast 1 item but no more than 9.
 */
 
if ($items > 9 or $items < 1){
	$thePassword = "Your number of items needs to be at least one ". 
					"but not more than nine.";
}
/*
 *  The main logic of the password calculation, if the data entered validates.
 *  Chooses a random word from the wordlist for the number of items specified
 *	by the user.  Also adds a Number and/or a Special Character after the first 
 *	word if the user choose either or both of those options.
 */
else{
	$hasNumber = $_GET['hasNumber'];
	$hasSpecial = $_GET['hasSpecialCharacter'];				
					
	for($i = 0; $i < $items; $i++) {
		$password = $password . $wordList[array_rand($wordList)];
		if ($hasNumber == "yes" && $i == 0) {
			$password = $password . rand(0,9);
		}
		if ($hasSpecial == "yes" && $i == 0) {
			$password = $password . $specialChars[array_rand($specialChars)];
		}  
	}
if (!$items)
	$thePassword ="";
else
	$thePassword = "Your Password is: ".$password;
}
