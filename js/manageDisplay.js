$(document).ready(function () {
    $("#btnUser").click(function () {
        var message = "";
        message += "<tr>><th> module</th><th>user</th></tr>";
        $.ajax({
            type: "GET",
            url: "http://localhost/fyp_multiple_table/getModule.php",
            cache: false,
            dataType: "JSON",
            success: function (response) {      
                for (var i = 0; i < response.length; i++) {
                    message += "<tr>"
                            + "<td>" + response[i].module + "</td>"
                            + "<td><button class='btnUser' value='" + response[i].user + "'>User</button></td>"
                            + "</tr>";
                }

                $("#defaultTable").html(message);
            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }
        });
    });
    $("#defaultTable").on("click", ".btnUser", function () {
        var id = $(this).val();
        
        var x = JSON.stringify(id);

        $.ajax({
            url: "http://localhost/fyp_multiple_table/getUserWithModule.php",
            data: "user_id= -KjhM3JobEX5qE3LGfnR",
            type: "GET",
            cache: false,
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                alert(data);
            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }});
    });
});



