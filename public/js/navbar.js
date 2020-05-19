$(document).ready(function() {
    $(".navLink").click(function() {
        let checkBoxStatus = $("#menuToggle").prop("checked");
        if (checkBoxStatus == true) {
            $("#menuToggle").prop("checked", false);
        }
    });
});
