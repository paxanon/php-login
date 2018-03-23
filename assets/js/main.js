
$(document)
.on("submit", "form.js-register", function(event){
	event.preventDefault();

	var _form = $(this)
	var _error = $(".js-error", _form);

	var dataObj = {

		email: $("input[type='Email']", _form).val(),
		password: $("input[type='Password']", _form).val()
	};

	if(dataObj.email.length < 6) {
		_error
			.text("Please enter a valid email address")
			.show();
		return false;
	} else if (dataObj.password.length < 12 ) {
		_error
			.text("Please use a passphrase of atleast 12 characters")
			.show();
		return false;
	}

	// Assuming we get here we can start the ajax process
	_error.hide();


	$.ajax({
		type: 'POST',
		url: '',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(dataObj) {


	})
	.fail(function ajaxFailed(e) {


	})
	.always(function ajaxAlwaysDoThis(dataObj) {


	})

	console.log(dataObj);

	return false;
})