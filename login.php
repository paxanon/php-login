<?php

	//allow the config
	define('__CONFIG__', true);
	//require the config
	require_once "inc/config.php"; 

	Page::ForceDashboard();
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
				<div class="uk-grid uk-childwidth-1-3@s uk-childwidth-1-1" uk-grid="">
					<form class="uk-form-stacked js-login">

					<h2>Login</h2>

					    <div class="uk-margin">
					        <label class="uk-form-label" for="form-stacked-text">Email</label>
					        <div class="uk-form-controls">
					            <input class="uk-input" id="form-stacked-text" autofocus type="Email" required="required" placeholder="email@someplace.tld">
						    </div>
					    </div>
					    <div class="uk-margin">
					        <label class="uk-form-label" for="form-stacked-text">Password</label>
					        <div class="uk-form-controls">
					            <input class="uk-input" id="form-stacked-text" type="Password" required="required" placeholder="Your password">
					        </div>
					    </div>
					    
					    <div class="uk margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

					    <div class="uk-margin">
				    	<button class="uk-button uk-button-default" type='submit'>Login</button>
				    	<p><a href="/register.php">To registration page</a></p>
					</form>
				</div>
			</div>
			<?php require_once "inc/footer.php"; ?>
		</body>
	</html>