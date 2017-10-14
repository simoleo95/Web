$(document).ready(function(){
	
	$(".offerta").click(function(){
		
		var data= $(".dati_offerta").serialize();
		
		
		$.ajax({
			type: "POST",
            url: "index.php?ajax=true",
            data: data,
            dataType: "html",
            success: function(result)
            {
             $('.popup-content').html(result);
 
            },
             error: function()
            {
             alert("Chiamata fallita, si è verificato un errore");
            }
 
});
		
	})
			
	

	
	
	
	
});