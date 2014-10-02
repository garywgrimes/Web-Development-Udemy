<!doctype html>
<html>
<head>
    <title>Email from PHP</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 <style type="text/css">
.topheader{
	margin: 0;
	padding: 0px;
	width: 100%;
	height: 40px;
	background-color: yellow;

}
h2{
	margin:0 auto;
	padding:5px;
	position: relative;
	margin-left:480px;

}
.break{
    clear: both;
  }
  .form{
  	float: right;
  	float: left;
  }
  .php{
  	font-size: 1.2em;
  	font-family: "Times New Roman", Times, serif;
  	margin:80px 100px 0 550px;

  }
</style>
</head>
<body>
	
	<div class = "topheader">
		<h2> Welcome to the Kushal email</h2>
	</div>



	<div class="break"></div>

		<div class= "form">
				<form method="post">
					<label for="myemail"></label>
					<input type= "email" name="myemail" placeholder="Your Name"/>
					<br></br>
					<label for="email"></label>
					<input type= "email" name="email" placeholder="TO"/>
					<br></br>
					<label for="subject"></label>
					<input type= "text" name="subject" placeholder="Subject"/>
					<br></br>
					<label for="Body"></label>
				  	<textarea name ="Body" placeholder="Body"></textarea>
					<br></br>
					<input type= "submit" name="submit" value="Send Email"/>
				</form>
	</div>

<div class="break"></div>


			<div class="php">
				<?php
					

					if($_POST["submit"]){

						$emailTo=$_POST["email"];
						$subject=$_POST["subject"];
						$body=$_POST["Body"];
						$from=$_POST["myemail"];


						if (mail($emailTo, $subject, $body, $from)){
							echo "Mail sent successfully";
						}
						else{
							echo "Mail failed";
						}
						
					}

					/*
					if (mail($emailTo, $subject, $body, $headers)){
						echo "Mail sent successfully";
					}
					else{
						echo "Mail failed";
					}
					*/
				?>
			</div>

</body>
</html>


