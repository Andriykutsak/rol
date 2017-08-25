$(document).ready(function() {
	//send ajax query
	$('a').on('click', function(event) {
		event.preventDefault();
	var link=$(this).attr("href");
	console.log(link);
$('.content').load('php/'+link);
$('document').ajaxStart(function() {
	$('.bar-wrap').css('display','block');
});
$('document').ajaxComplete(function(event, xhr, settings) {
		$('.bar-wrap').css('display','none');
});

});
});
