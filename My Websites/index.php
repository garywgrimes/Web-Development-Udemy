<!doctype html>
<html>
<head>
    <title>Email from PHP</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 
</head>
<body>
	<div>

	<?php
		$arrnames = array("Kushal", "Pradhan", "KP");
	
		if($_POST["submit"]){
			if ($_POST["name"]){
				foreach ($arrnames as $name) {
					if($name==$_POST["name"]){

						echo "Hello " .$name;
						$knowyou=1;
					}
				}
			if(!$knowyou) echo "who the hell are you ".$_POST['name'];
			}
			else{
				echo "Please enter your name";
			}
		}
	?>
	<form method="post">
		<label for="name">Name</label>
			<input type= "text" name="name"/>
			<input type= "submit" name="submit" value="Submit your Name"/>
	</form>
	</div>
</body>
</html>


