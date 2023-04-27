$(function () {
    $("#dialog").dialog({
        autoOpen: false,
    });
    $("#opener").click(function () {
        $("#dialog").dialog("open");
    });
});

$(function () {
    $("#datepicker").datepicker({
        changeMonth:true,
        changeYear: true
    });
});

$(function () {
    $("#slider").slider({
        orientation: "horizontal",
        min: 0,
        max: 10,
        value: 5,
        slide: function (event, ui) {
            $("#mark").val(ui.value);
        }
    });
    $("#mark").val($("#slider").slider("value"));
});