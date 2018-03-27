<?php

	//allow the config
	define('__CONFIG__', true);
	//require the config
	require_once "inc/config.php";

	Page::ForceLogin();

	$User = new User($_SESSION['user_id']);
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
				<h2>Dashboard</h2>
				<p>Hello <?php echo $User->f_name; ?> you registered at <?php echo $User->reg_time; ?> and your user id is <?php echo $User->user_id; ?>.</p>
				<p>We have your first name listed as <?php echo $User->f_name;?>.</p>
				<p>We have your last name listed as <?php echo $User->l_name;?>.</p>
				<p>We have your email listed as <?php echo $User->email;?>.</p>
				<p><a href="/logout.php">Logout</a></p>
			</div>
			<?php require_once "inc/footer.php"; ?>
		</body>
	</html>