$(document).ready(function() {
    $(".slider").each(function () {
        var $slider = $(this);
        var $left = $('#go-left', this);
        var $right = $('#go-right', this);

        $($slider).diyslider({
            width: "900px", // width of the slider
            height: "330px", // height of the slider
            display: 3, // number of slides you want it to display at once
            loop: false // disable looping on slides
        }); // this is all you need!

        // use buttons to change slide
        $($left).bind("click", function () {
            // Go to the previous slide
            $($slider).diyslider("move", "back");
        });
        $($right).bind("click", function () {
            // Go to the previous slide
            $($slider).diyslider("move", "forth");
        });
    });
});