$(function () {
    $("#showhide").click(function () {
        if ($(this).is(":checked")) {
            $(".show").show();
            $(".btns").hide();
           

        } else {
            $(".show").hide();
            $(".btns").show();
        }
    });
});