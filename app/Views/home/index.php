<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('default', 'contents');
?>
<div class="container-fluid px-1 px-sm-3 py-5 mx-auto">
	<div class="row d-flex justify-content-center">
		<div class="row card0">
			<div class="card1 col-lg-8 col-md-7">
				<small><?= lang('home.title')?></small>
				<div class="text-center">
					<img class="image mt-5" src="https://i.imgur.com/M8VyA2h.png">
				</div>
				<div class="row px-3 mt-3 mb-3">
					<h1 class="large-font mr-3" id="current_weather_degree"></h1>
					<div class="d-flex flex-column mr-3">
						<h2 class="mt-3 mb-0" id="city_name"></h2>
						<small id="current_date"></small>
					</div>
					<div class="d-flex flex-column text-center">
						<h3 class="fa fa-sun-o mt-4"></h3>
						<small id="current_weather_type"></small>
					</div>
				</div>
			</div>
			<div class="card2 col-lg-4 col-md-5">
				<div class="row px-3">
					<form action="" method="post" id="location_form">
						<input type="text" id="location" name="location"
							placeholder="Search for a loca" class="mb-5">

						<button class="btn btn-success mb-5 mr-0 text-center" type="submit"
							id="submit_location_form">Search</button>
					</form>

				</div>
				<div class="mr-5">
					<p class="light-text suggestion" id="birmingham"><?= lang('home.br')?></p>
					<p class="light-text suggestion" id="manchester"><?= lang('home.manc')?></p>
					<p class="light-text suggestion" id="new_york"><?= lang('home.ny')?></p>
					<p class="light-text suggestion" id="california"><?= lang('home.cal')?></p>

					<div class="line my-5"></div>

					<p><?= lang('home.weather_info')?></p>
					<div class="row px-3">
						<p class="light-text"><?= lang('home.weather_cloudy')?></p>
						<p class="ml-auto" id="weather_cloudy"></p>
					</div>
					<div class="row px-3">
						<p class="light-text"><?= lang('home.weather_humidity')?></p>
						<p class="ml-auto" id="weather_humidity"></p>
					</div>
					<div class="row px-3">
						<p class="light-text"><?= lang('home.weather_wind')?></p>
						<p class="ml-auto" id="weather_wind"></p>
					</div>
					<div class="row px-3">
						<p class="light-text"><?= lang('home.weather_pressure')?></p>
						<p class="ml-auto" id="weather_pressure"></p>
					</div>

					<div class="line mt-3"></div>
				</div>
			</div>
		</div>
	</div>
</div>