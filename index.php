<!DOCTYPE HTML>
<html>


<head>
<meta charset="UTF-8">
<link href="main.css" rel="stylesheet" type="text/css">
<title>Grocery List Password</title>
<?php require 'logic.php'; ?>
</head>

<body>
<div id='main'>
<h1>Grocery List Password</h1>

	<p>This site generates an xkcd password using common grocery list items. 				Password security is harder to break the longer the password length. However, the longer the password the harder it is for humans to memorize. An xkcd password generator makes it easier for people to memorize passwords by creating them from random words.
    </p>
    
	<p>The scope of the word dataset used in this password generator is very limited. So, please treat this as just a feasibility study application. For a real world secure password you would need a much larger dataset of words.
    </p>
    
	<p>In the space below enter the number of grocery items you want in your password. The maximum is 9 items, we recommend that you use at least 4 items to make your password secure.
    </p>
    

<form action='index.php' method='GET'>
  <label for='numItems'>Number of items (9 max):</label>
  <input type='text' id='numItems' name='numItems'/><br />
  
	<p> Would you like a number in the password?
	<input type='radio' name='hasNumber' value='yes'/>
		YES
	<input type='radio' name='hasNumber' value='no'/>
		NO
	</p>
    
	<p> Would you like a Special Character in the password?
	<input type='radio' name='hasSpecialCharacter' value='yes'/>
		YES
	<input type='radio' name='hasSpecialCharacter' value='no'/>
		NO
	</p>
    
  <input type='submit' name='submit'/>
</form>


<hr/>

<p id="password"> <?php echo $thePassword ?> </p>
</div>
</body>
</html>