$(document).ready(function () {
  

     var called = 1;	
    $(window).scroll(function() {
		var difference= $(document).height() - $(window).height();
		var difference= difference-1;
		var top =$(document).scrollTop();
		
		
       if(top >= difference ) {
	   
	   
	   
            var url = "index.php?ajax=true&num="+(called++ * 6);
		   

           $.ajax({
                url: url,
                success: function(result) {
					
                    $('#ricerca').append(result);
                },
                error: function() {
                    alert("Errore ajax");
                }
            });
        }
    });
});

