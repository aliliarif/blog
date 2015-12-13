// ============== Featured posts 

// on page load, display featured post
$(function() {
	getRandPost();
});

function getRandPost(){
	$.ajax({
	url: 'post_controller/getRandPost',
	dataType: 'json',
	})
	.done(function(result) { // returns random post
		
     	var $title = result[0].title;
     	var $description = result[0].description;
     	var $date = result[0].date;
     	var $username = result[0].username;
     	setRandPost($title,$description,$date,$username);
     	setTimeout(function(){getRandPost();}, 300000); // call this func every 5 minutes
     	
	})
	.fail(function(data, textStatus, jqXHR) {
			// debugg 
			console.log("error in getRandPost func... ");
			console.log(jqXHR.status);
	})
}

// function to show random post as featured, max posts allowed = 1
function setRandPost($title,$description,$date,$username){
	$("#featured_post").empty(); // clear prev post, max featured posts alowed = 1
	$("#featured_post").append(
		'<div class="col-md-3 " style="word-wrap: break-word; margin-left:-100px;">'
               + '<div class="post-preview">'
                    + '<a href="#">'
                        + '<h2 class="post-title">'
                           + $title + '<i style="font-size:12px;color: #0085a1;"> featured</i>'
                        + '</h2>'
                        + '<h3 class="post-subtitle">'
                           + $description
                        + '</h3>'
                    + '</a>'
                    + '<p class="post-meta" >Posted by '+$username+' on '+$date+'</p>'

                + '</div>'
        + '</div>'
	);
}
// ==============