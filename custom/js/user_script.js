// focus on first input when login modal shows
$("#login_modal").on('shown.bs.modal', function(event) {
	$("#email_login").focus();
});

$("#login_modal").on('click', '#login_btn', function(event) {
	var $email = $("#email_login").val();
	var $password = $("#password_login").val();
	// front-end input validation
	if ($email == '' || $email === undefined){
		alert("Email cant't be empty!");
		return false;
	}else if($password == '' || $password === undefined){
		alert("Password can't be empty!");
		return false;
	}else if(!isEmail($email)){
		alert("Email is not in valid format!");
		return false;
	}

	// if form is valid
	user_login($email,$password);
});

// check if combination of user and password exists in DB 
function user_login($email,$password) {
	$.ajax({
		url: 'index.php/user_controller/selUser',
		type: 'POST',
		data: {
			email : $email,
			password : $password
		},
	})
	.done(function(data) {
		alert(data);
		console.log("success");
	})
	.fail(function(data, textStatus, jqXHR) {
		// debugg 
		console.log("error in user_login func... ");
		console.log(jqXHR.status);
	})
}

