<?php

	// //allow the config
	// define(__CONFIG__, true);
	// //require the config
	// require_once "inc/config.php"; 

?>

<?DOCTYPE-html>
<html lang="en">
	<head>
		<meta charset   ="utf-8" />
		<meta http-quiv ="X-UA-Compatible" content="IE=edge" />
		<meta name      ="viewport" content="width=device-width, initial-scale=1" />
		<meta name      ="robots" content="follow">

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
				<p> <h2>TODO List</h2>
					<P><del>Add First name</del></P>
					<P><del>Add Last name</del></P>
					<p>Email verification</p>
					<p>Change Email</p>
					<p>Reset Password</p>
					<P>Character Generation</P>
					<P>Character Sheet</P>
				<p>
				<p uk-margin>
					<button class="uk-button uk-button-primary uk-button-small">
						<a style="color:cyan" href="/login.php">Login</a>
					</button>
					<button class="uk-button uk-button-default uk-button-small">
						<a href="/register.php">Registration</a>
					</button>
				</p>
			</div>

			<?php require_once "inc/footer.php"; ?>
		</body>
	</html>