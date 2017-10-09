$(document).ready(function() {
    $(".getId").click(function () {
        var id = $(this).find(".id").text();

        var url = "index.php?controller=asta&task=dettagli&id_asta=" + id + "&ajax=true";
        $.ajax({
            url: url,
            success: function (result) {
                $('#mainContent').html(result);
            },
            error: function() {
                alert("Errore ajax");
            }
        });
    });
});