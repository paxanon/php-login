
$(document)
.on("submit", "form.js-register", function(event){
	event.preventDefault();

	var _form = $(this)
	var _error = $(".js-error", _form);

	var data = {

		email: $("input[type='Email']", _form).val(),
		password: $("input[type='Password']", _form).val()
	};

	if(data.email.length < 16) {
		_error
			.text("Please enter a valid email address")
			.show();
		return false;
	} else if (data.password.length < 12 ) {
		_error
			.text("Please use a password of atleast 12 characters")
			.show();
		return false;
	}

	console.log(data);

	alert('Form was submittet');


	return false;
})