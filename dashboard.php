<?php

	//allow the config
	define('__CONFIG__', true);
	//require the config
	require_once "inc/config.php";

	ForceLogin();
?>

<?DOCTYPE-html>
<html lang="en">
	<head>
		<meta charset   ="utf-8" />
		<meta http-quiv ="X-UA-Compatible" content="IE=edge" />
		<meta name      ="viewport" content="width=device-width, initial-scale=1" />
		<meta name      ="robots" content="follow">

		<title>Dashboard</title>

		<base href="/" />
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
	</head>
		<body>
			<div class="uk-section uk-container">
				This is the dashboard; you are signed in as user <?php echo $_SESSION['user_id']?>
			</div>
			<?php require_once "inc/footer.php"; ?>
		</body>
	</html>