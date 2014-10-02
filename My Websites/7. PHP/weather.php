
<!doctype html>
<html>
<head>
    <title>Weather</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">



 <style type="text/css">
html, body{
	height: 100%;
}

 .container{
 	background-image: url(background.jpg);
 	width: 100%;
 	height: 100%;
 	background-size: cover;
 	background-position: center;
 	padding-top: 150px;
 }
p{
	padding-top: 15px;
	padding-bottom: 15px; 
}
.center{
text-align: center;
}
.btn{
	margin-top: 50px;
}
</style>
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 center">

					<div class= "weather">
						<h1 class="center">Weather Predictor</h1>
					<p class="lead center">Enter the city for the weather forecast</p>


					<form method="post">
						<div class="form-group">
							
							<input type="text" class="form-control" id="city" placeholder="Kathmandu, Birmingham.." />
							<input type="submit" class="btn btn-success btn-lg" value="Find my weather" id="submit" />

						</div>

					</form>
					</div>

				</div>

			</div>

		</div>	


<div class="break"></div>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script>
	$("#submit").click(function(event){
		event.preventDefault();
		if("#city").val()!=""{
		$.get("scraper.php?city=london", function(data){
			alert(data);
		});
		}
		else{
			alert "Please Enter a city";
		}

	});
	</script>
</body>
</html>


