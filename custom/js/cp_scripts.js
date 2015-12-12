// CREATE POST PAGE SCRIPTS

$("#publish_post").on('click', function(event) {
	// form controll 
	// check if post title or post description is empty
	var $post_title = $("#post_title").val();
	var $post_desc = $("#post_desc").val();
	if ($post_title == '' || $post_title === undefined){
		alert("Post title can't be empty!");
		return false;
	}else if($post_desc == '' || $post_desc === undefined){
		alert("Post description can't be empty!");
		return false;
	}else{
		// form valid, call AJAX to insert into database
		insert_post($post_title,$post_desc);
	}
});

// function to insert post into database
function insert_post($post_title,$post_desc){
	$.ajax({
		url: 'create_post_controller/insPost',
		type: 'POST',
		data: {
			post_title : $post_title,
			post_desc : $post_desc
		},
	})
	.done(function() {
		alert("Post is successfuly published."); // change this
		location.href = "/blog"; // load index page
	})
	.fail(function(data, textStatus, jqXHR) {
		// debugg 
		console.log("error in insert_post func... ");
		console.log(jqXHR.status);
	})
}