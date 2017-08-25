$(document).ready(function() {
	//send ajax query
	$('a').on('click', function(event) {
		event.preventDefault();
	var link=$(".head-link").attr("href");
	console.log(link);
$('.content').load('php/'+link);
});
});
