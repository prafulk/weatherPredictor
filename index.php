<!doctype html>
<html>
<head>
    <title>What's my Weather</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<style>

	html,body{
		height:100%;		
	}
	.container{
		background-image:url("praful.jpg");
		width:100%;
		height:100%;
		background-size:cover;
		background-position: center;
		padding-top: 25px;
	}


	.center{
		text-align: center;

	}

	.white{
		color:white;
	}
	p{
		padding-top: 15px;
		padding-bottom:15px;
	}

	button{
		margin-top: 20px;
		margin-bottom: 20px;
	}

	.alert{
		margin-top: 20px;
		display: none;
	}
	</style>

 </head>

<body>

	<div class = "container">

			<div class = "row">

				<div class = "col-md-6 col-md-offset-3">
					<h1 class = "center white">  Weather Predictor</h1>
					<p class = "lead center white">Enter your city and get a prediction of the weather </p>
				<form>
					<div class = "form-group">
						<input type = "text" class = "form-control" name = "city" id = "city" 
						placeholder = "eg: London, Paris, San Francisco"/>
					</div>
				<button id = "findMyWeather" class = "btn btn-success btn-lg "> Find my Weather </button>
				</form>

				<div id = "success"class = "alert alert-success"></div>
				<div id = "fail" class = "alert alert-danger">Enter a valid city </div>
					
				<div id = "nocity" class = "alert alert-danger">Please enter a city </div>
				
			
				
				</div>

			


			</div> 
	</div>
	
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>

$("#findMyWeather").click(function(event){

	event.preventDefault(); // This is to prevent from auto saving on click of the button
	

	$(".alert").hide();
	if($("#city").val()!= ""){
		
	
	$.get("scrapper.php?city="+$("#city").val(), function(data){
		
		if(data == "")
		{	
			//$("#nocity").hide();
			$("#fail").fadeIn();
			//$("#success").hide();
		}

		else{	

			//$("#nocity").hide();
			//$("#fail").hide();
			$("#success").html(data).fadeIn(); }
	});
}
else{
	$("#nocity").fadeIn();
}
});

</script>

</body>
</html>