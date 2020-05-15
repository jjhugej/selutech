import Typed from "typed.js";
$(document).ready(function() {
    console.log("type");

    var options = {
        strings: ["<i>First</i> sentence.", "&amp; a second sentence."],
        typeSpeed: 40
    };

    var typed = new Typed("#js_target_onelement", options);
});
