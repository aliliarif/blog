$(document).on('click', '.backBtn', function(event) {
	history.back();
});

$('.textarea').wysihtml5();

// function for email validation
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}