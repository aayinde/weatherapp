<?php
/**
 * @var string|null $title
 * @var Framework\MVC\View $view
 */
?>
<!doctype html>
<html lang="<?= App::language()->getCurrentLocale() ?>"
	dir="<?=App::language()->getCurrentLocaleDirection()?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= isset($title) ? strip_tags($title) : 'Weather App' ?></title>
<link rel="shortcut icon"
	href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABLgAAAS4Be3EaTQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGbSURBVFiF7ZaxisJAEIb/HBusLIKksVMEBQU7sdBXEB8iXRqfwtbCF7C1kIClYOMr2As2giBJsY1G41whBOIpjqOe3OEPC9ndYebbzewwBgDCG/X1zuAfgA/A3QCz2QxE9GOEYYhWq/VaANu20Ww2L+6Zpol0Oi0CAE514Oao1+t0TbvdjizLYvk5H+wbyOfzV/cmkwmCILjz3Cc9BWA0GomCPwVgv99jPB6LARTXMJfLXVwPwxDD4TCx5vs+HMeB1prlm5Usy+XyahKe63g8UqFQ4CbibaNUKkVRFLEBBoPBPS/htlGxWGQH11pTNpt97jM0TRNEvLah2+1itVqxbAHAALMhqVarsG07sdbr9VCpVOL5YrFAuVzGdrtlAwCC6gWAlFKktU5cf7vdlviSAdRqtUTw6XT62lJ8rkajEX9HUYROpyN1JbsBz/Pi0/f7fZEPSH+BYRi0Xq+JiMj3fcpkMr8LUCqV4tO7rvtIcBmA4zhERDSfz0kp9RCAKAk3mw2CIIDrujgcDhIXsdiF6FX6W13xB+BfAnwDuedID9ikolEAAAAASUVORK5CYII=">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
	integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
	crossorigin="anonymous">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css"
	integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body {
	color: #fff;
	overflow-x: hidden;
	height: 100%;
	background-image: linear-gradient(#81D4FA, #2196F3);
	background-repeat: no-repeat;
}

.card0 {
	width: 94%;
}

.card1 {
	background-image: linear-gradient(#2196F3, #81D4FA);
	padding: 30px 20px 30px 50px;
}

.image {
	width: 300px;
	height: 300px;
}

.large-font {
	font-size: 70px;
	font-family: Arial;
}

.fa-sun-o {
	font-size: 22px;
}

.card2 {
	background-color: #607D8B;
	padding: 0px 0px 40px 40px;
}

input {
	background-color: #607D8B;
	padding: 24px 0px 12px 0px !important;
	width: 80%;
	box-sizing: border-box;
	border: none !important;
	border-bottom: 1px solid #CFD8DC !important;
	font-size: 16px !important;
	color: #fff !important;
}

input:focus {
	-moz-box-shadow: none !important;
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
	border-bottom: 1px solid #fff !important;
	outline-width: 0;
	font-weight: 400;
}

::placeholder {
	color: #B0BEC5 !important;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #B0BEC5 !important;
}

::-ms-input-placeholder {
	color: #B0BEC5 !important;
}

.fa-search {
	color: #607D8B;
	background-color: #E1F5FE;
	font-size: 20px;
	padding: 20px;
	width: 20%;
	cursor: pointer;
}

.light-text {
	color: #B0BEC5;
}

.suggestion:hover {
	color: #fff;
	cursor: pointer;
}

.line {
	height: 1px;
	background-color: #B0BEC5;
}

@media screen and (max-width: 500px) {
	.card1 {
		padding-left: 26px;
	}
}
</style>
</head>
<body>
<?= $view->renderBlock('contents') ?>
<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
		integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"
		integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript"
		src="<?= ASSET_DIR . 'js' . DS . 'app.js'; ?>"></script>
</body>
</html>
