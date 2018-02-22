<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Weather App</title>
  </head>
  <body>
  	

	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link active" href="#">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Cities</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">About us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link disabled" href="http://openweathermap.org/">Source</a>
	  </li>
	</ul>
	<div class="container">
		<div class="jumbotron">
  			<div class="info text-center text-success"></div>
  			<div class="form-group">
  				<input type="text" class="city-input form-control" placeholder="enter city name">
  				<button class="submit-btn btn btn-primary btn-block mt-4">get weather</button>
  			</div>
  			<div class="weather-info"></div>
  		</div>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    $('.info').html('<h2 class="mb-4">Check Your Weather</h2>');
   	$(".submit-btn").on("click",function(event){
   		var city=$(".city-input").val();
    	$.get(
    		"http://api.openweathermap.org/data/2.5/weather?q="+city+"&appid=4327249b3493bcec4c5e462e2494343f", 
    		// function(data){
    		// 	var str="<h4>"+city+" weather: "+data.weather[0].main+"</h4>";
    		// 	str+="<h4>Temperature: "+(data.main.temp-273.15)+"</h4>";
    		// 	str+="<h4>wind speed: "+data.wind.speed+"</h4>";
    		// 	$(".weather-info").html(str);
    		// }
			function(data) {
				var str = "<h5 class='text-center'>" + city + " weather</h5>";
				str += "<div class='row'>";
				str += "<div class='col-6'><h5>Weather: <span class='badge badge-primary'>" + data.weather[0].main + "</span></h5></div>";
				str += "<div class='col-6'><h5>Temp: <span class='badge badge-primary'>" + (data.main.temp - 273.15) + "</span></h5></div>";
				str += "<div class='col-6'><h5>Wind speed: <span class='badge badge-primary'>" + data.wind.speed + "</span></h5></div>";
				str += "<div class='col-6'><h5>Pressure: <span class='badge badge-primary'>" + data.main.pressure + "</span></h5></div>";
				str += "</div>";
				$(".weather-info").html(str);
			}	
    	);
    });
    </script>
  </body>
</html>