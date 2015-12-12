// ============== Login modal ==============

// focus on first input when login modal shows
$("#login_modal").on('shown.bs.modal', function(event) {
	$("#email_login").focus();
});
// on hidde modal, clear inputs
$("#login_modal").on('hidde.bs.modal', function(event) {
	$("#email_login").val('');
	$("#password_login").val('');
});

$("#login_modal").on('click', '#login_btn', function(event) {
	var $email = $("#email_login").val();
	var $password = $("#password_login").val();
	// front-end input validation
	if ($email == '' || $email === undefined){
		$("#error_login").empty(); // clear prev error 
		$("#error_login").append("&middot; Please enter your email.");
		return false;
	}else if($password == '' || $password === undefined){
		$("#error_login").empty();
		$("#error_login").append("&middot; Please enter your password.");
		return false;
	}else if(!isEmail($email)){
		$("#error_login").empty();
		$("#error_login").append("&middot; Invalid email format.");
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
	.done(function(result) {

		if (result == 1){ // user/password combination exists
			$("#login_modal").modal("hide");
			location.reload(); // reload page
		}else{ // user/password combination exists doesnt exists, show error in modal
			$("#error_login").empty();
			$("#error_login").append("&middot; The email and password you entered don't match.");
		}
	})
	.fail(function(data, textStatus, jqXHR) {
		// debugg 
		console.log("error in user_login func... ");
		console.log(jqXHR.status);
	})
}
// ==============

// ============== register modal ==============

$("#register_modal").on('shown.bs.modal', function(event) {
	$("#name_register").focus();
});
// on hidde modal, clear inputs
$("#login_modal").on('hidde.bs.modal', function(event) {
	$("#email_login").val('');
	$("#password_login").val('');
});

// ==============


// ============== no permission to add posts modal ==============

$("#cantPost_modal").on('click', '#login_btn_np', function(event) {
	$("#cantPost_modal").modal("hide");
	$("#login_modal").modal("show");
});

$("#cantPost_modal").on('click', '#register_btn_np', function(event) {
	$("#cantPost_modal").modal("hide");
	$("#register_modal").modal("show");
});

// ==============
