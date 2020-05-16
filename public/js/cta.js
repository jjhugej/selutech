$(document).ready(function() {
    console.log("cta!");
    $("form").on("submit", function(e) {
        e.preventDefault();

        var datastring = $("#ctaForm").serialize();

        $.ajax({
            type: "POST",
            url: "/contact",
            data: datastring,
            dataType: "json",
            success: function(response) {
                $("#formEmail").empty();
                $("#form_phone_number").empty();
                $("#formName").empty();

                message = response.message;
                $("#success")
                    .empty()
                    .append("<p class='successMsg'>" + message + "</p>");
                $("#submitBtn").prop("disabled", true);
            },
            error: function(response) {
                data = JSON.parse(response.responseText);

                $.each(data.errors, function(index, value) {
                    if (index == "email") {
                        $("#formEmail")
                            .empty()
                            .append(
                                "<p class='errorMsg'>" + "*" + value + "</p>"
                            );
                    } else if (index == "phone_number") {
                        $("#form_phone_number")
                            .empty()
                            .append(
                                "<p class='errorMsg'>" + "*" + value + "</p>"
                            );
                    } else if (index == "name") {
                        $("#formName")
                            .empty()
                            .append(
                                "<p class='errorMsg'>" + "*" + value + "</p>"
                            );
                    }
                });
            }
        });
    });
});
