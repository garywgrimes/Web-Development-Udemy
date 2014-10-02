<?php 

	if($_POST["submit"]){
		$result ='<div class="alert alert-success"> Form submitted </div>';
		if(!$_POST["name"]){
			$error .="<br />Please enter your name";
		}
		if(!$_POST["email"]){
			$error .="<br />Please enter your email";
		}
		if(!$_POST["comment"]){
			$error .="<br />Comments please";
		}
		/*

		The email validation is auto done by bootstrap so we do not need this code but otherwise we may need this

		if ($_POST['email'] !="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		  $error .="<br />Please enter a valid email address";
		} 
		*/

		if($error){
			
			$result ='<div class="alert alert-danger"> <strong>Form is not complete:</strong> '.$error.' </div>';
		}
		else{
			if(mail("Kushal.pdn@gmail.com", "Comment from the Post", "Name: ".$_POST['name']." 

				Email: ".$_POST['email']." 

				Comment: ".$_POST['comment'])){
				$result ='<div class="alert alert-success"> <strong>Thank You. Your comment is submitted !!</strong></div>';

			}
			else{
				$result='<div class="alert alert-danger"> <strong>There was an error. Please try again later.</strong></div>';
			}
		}
	}

 ?>

<!doctype html>
<html>
<head>
    <title>Rob's Email</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">



 <style type="text/css">

.emailform{
	border: 1px solid grey;
	border-radius: 10px;
	margin-top: 10px;
}

textarea{
	height: 120px;
}
</style>
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 emailform">
					<h1>My email form</h1>

					<?php 
						echo $result;
					 ?>

					<p class="lead">Please get in touch - I'll get back to you asap...</p>

						<form method="post">
							<div class='form-group'>
								<label for ="name">Your Name</label>
								<input type ="text" name="name" placeholder="Your Name" class="form-control" value="<?php echo $_POST['name'] ?>"/>
							</div>
							<div class='form-group'>
								<label for ="email">Your Email</label>
								<input type ="email" name="email" placeholder="Your Email" class="form-control" value="<?php echo $_POST['email'] ?>"/>
							</div>

							<div class='form-group'>
								<label for ="comment">Comments</label>
								<textarea type ="textarea" name="comment" placeholder="Comments" class="form-control" ><?php echo $_POST['comment']?></textarea>
							</div>


							<div class='form-group'>
								
								<input type ="submit" name="submit" value="Submit" class="btn btn-success btn-lg">
							</div>

						</form>
				</div>

			</div>

		</div>	


<div class="break"></div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>


