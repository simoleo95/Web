$(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {

        var url = "index.php?ajax=true";

        $.ajax({
            url: url,
            success: function(result) {
                $('#mainContent').append(result);
            },
            error: function() {
                alert("Errore ajax");
            }
        })
    }
});