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
		<meta charset="utf-8" />
		<meta http-quiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow">

		<title>Pax Register</title>

		<base href="/" />
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
	
	</head>

		<body>

			<div class="uk-section uk-container">
				<div class="uk-grid uk-childwidth-1-3@s uk-childwidth-1-1" uk-grid="">
					<form class="uk-form-stacked js-register">

					<h2>Register</h2>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">First name</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="f_name" name="f_name" autofocus type="Text" required="required" placeholder="First name">
					    </div>
				    </div>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">Last name</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="l_name" autocomplete='family-name' name="l_name" type="Text" required="required" placeholder="Last name">
					    </div>
				    </div>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">Email</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="email" autocomplete='email' type="Email" required="required" placeholder="email@someplace.tld">
					    </div>
				    </div>

				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">Password</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="password" type="Password" required="required" placeholder="Your password">
				        </div>
				    </div>

				    <div class="uk margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

				    <div class="uk-margin">
			    	<button class="uk-button uk-button-default" type='submit'>Register</button>
			    	<p><a href="/login.php">To login page</a></p>
					</form>

				</div>
			</div>

			<?php require_once "inc/footer.php"; ?>
		</body>
	</html>