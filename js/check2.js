$(function () {
    $("#showhide").click(function () {
        if ($(this).is(":checked")) {
            // $(".show").show();
            $(".btns").hide();
            $(".docx").show();

           

        } else {
            // $(".show").hide();
            $(".btns").show();
            $(".docx").hide();

        }
    });
});