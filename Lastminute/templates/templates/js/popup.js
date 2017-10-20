$(document).ready(function () {	
	
    $('.popup-link').click(function () {
        $('html').addClass('overlay');
        var activePopup = $(this).attr('data-popup-target');
        $(activePopup).addClass('visible');

        // Ajax call
       id = $(this).find(".id").text();

        var url = "index.php?controller=asta&task=dettagli&id_asta=" + id + "&ajax=true";
        $.ajax({
            url: url,
            success: function (result) {
                $('.popup-content').html(result);
            },
            error: function() {
                alert("Errore ajax");
            }
        });
    });

    $(document).keyup(function (e) {
        if (e.keyCode == 27 && $('html').hasClass('overlay')) {
            clearPopup();
        }
    });

    $('.popup-exit').click(function () {
		//var id = $("input[name='id_asta']").val();
		
        clearPopup();		
		
		
    });

    $('.popup-overlay').click(function () {
        clearPopup();
    });

    function clearPopup() {
		
        $('.popup.visible').addClass('transitioning').removeClass('visible');
        $('html').removeClass('overlay');

        setTimeout(function () {
            $('.popup').removeClass('transitioning');
        }, 200);
		
		var prezzo= $('.prezzoF').text();
	    var id= $('.astaID').text();
		
	$("#"+id).find(".pf").text(prezzo +" euro");
    }
	


});
