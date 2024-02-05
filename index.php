<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/main.css" />

		<title>yoga-intensive</title>
		
	</head>
	<body>
		<?php 
		
		include_once 'php/function.php';
		include_once('php/tmp/header.php');
		?>
		<main class="main">
			<?php 
			include_once('php/form.php');
			include_once('php/tmp/history.php');
			include_once('php/tmp/program.php');
			include_once('php/tmp/place.php');
			include_once('php/tmp/teachers.php');
			include_once('php/tmp/celender.php');
			include_once('php/tmp/footer.php');
			?>
		</main>
		<?php 
		include_once('php/tmp/footer.php');
			?>
		<script src="js/jquery371.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		
		<script src="js/form-ajax.js" defer></script> 
		<script defer src="js/validation.js"></script>
		<script src="js/mask_phone.js" type="text/javascript" ></script>
		<script src="js/phone.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/main.js" defer></script>
	</body>
</html>
