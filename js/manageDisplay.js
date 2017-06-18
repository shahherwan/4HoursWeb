
$(document).ready(function () {
//                $("#btnAccept").click(function () {
//                    var id = $(this).val();
//                    alert(id);
//                });
    $("#defaultTable").on("click", "#btnAccept", function () {
        var id = $("#btnAccept").val();
        console.log(id);
        alert(id + "123");
    });
});

