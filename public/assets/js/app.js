jQuery(document).ready(function($){

				$("#location_form").submit(function(e){
				e.preventDefault();
				$("#submit_location_form").prop('disabled',true);
				var city = $("#location").val();
				if(city ==''){
					const settings = {
							"async": true,
							"crossDomain": true,
							"url": "/checkweather",
							"method": "POST",
							"data":{cityname:city}
						}
					fetchLocationWeather(settings);
				} else {
					const settings = {
							"async": true,
							"crossDomain": true,
							"url": "/checkweather",
							"method": "POST",
							"data":{cityname:city}
						}
					fetchLocationWeather(settings);
				}
				
			});
			function fetchLocationWeather(settings){
				$.ajax(settings).done(function (response) {
					$("#submit_location_form").prop('disabled',false);
					console.log(response);
					var repData = response;
					$("#current_weather_degree").html(repData.main.feels_like +"&#176;");
					$("#weather_humidity").html(repData.main.humidity +"%");
					$("#city_name").html(repData.name);
					$("#weather_cloudy").html(repData.weather[0].description);
					$("#weather_wind").html("Degree: "+repData.wind.deg+" Speed: "+repData.wind.speed);
					$("#weather_pressure").html(repData.main.pressure);				
				});
			}
			
			});