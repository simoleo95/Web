$(document).ready(function () {
    var called = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() == $(document).height() - $(window).height()) {

            var url = "index.php?ajax=true&num="+(called++ * 6);

            $.ajax({
                url: url,
                success: function(result) {
                    $('#ricerca').append(result);
                },
                error: function() {
                    alert("Errore ajax");
                }
            })
        }
    });
});