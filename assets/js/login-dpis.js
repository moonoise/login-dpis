$(document).ready(function () {
    "use strict";
    $("#submit").click(function () {

        var username = $("#myusername").val(), password = $("#mypassword").val();

        if ((username === "") || (password === "")) {
            $("#message").html("<div class=\"text text-danger \"> กรุณาใส่ เลขบัตรประจำตัวประชาชน และรหัสผ่าน</div>");
        } else {
            $.ajax({
                type: "POST",
                url: "check-login-dpis.php",
                data: "myusername=" + username + "&mypassword=" + password,
                dataType: 'JSON',
                success: function (html) {
                    //  console.log(html.response + ' ' + html.username);
                    //  $("#message").html(html.response);
                    if (html.success === true) {
                        location.assign("index.php");
                       //location.reload();
                       $("#message").html(html.success);
                        return html.username;
                    } else {
                        $("#message").html(html.msg);
                    }
                },
                error: function (textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                },
                beforeSend: function () {
                    $("#message").html("<p class='text-center'><img src='../assets/images/blocks-1s-200px.gif' height='42' width='42'></p>");
                }
            });
        }
        return false;
    });
});

$('#form-signin').keydown(function(e) {
    
    var key = e.which;
    // console.log(key)
        if (key == 13) {
        // As ASCII code for ENTER key is "13"
            $('#submit').trigger( "click" ); // Submit form code
        }
    });