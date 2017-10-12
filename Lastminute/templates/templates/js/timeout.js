$(document).ready(function(){
	$('#timeout').timeTo({
		timeTo: new Date(new Date($('#timeout').attr('tag'))),
		theme: "black",
		displayCaptions: true,
		fontSize: 40,
		captionSize: 15
	})
	var scadenza = new Date($('#timeout').attr('tag'));
	var now = (new Date()).getTime();
	var time = scadenza - now;
	/*window.setTimeout(function(){
		// Inserire chiamata Ajax
	}, time);*/
});