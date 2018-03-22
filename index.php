<?php 
	
	//allow the config
	define(__CONFIG__, true);
	//require the config
	require_once "inc/config.php"; ?>
<?DOCTYPE-html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-quiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow">

		<title>Pax Login</title>

		<base href="/" />
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
	</head>

		<body>

			<div class="uk-section uk-container">
				<?php 
					echo "Hello World	today is: " ;
					echo date("d m Y");
				?>
			<?php require_once "inc/footer"; ?>
		</body>
	</html>