import Typed from "./typed.js";

$(document).ready(function() {
    var options = {
        strings: [
            "Websites",
            "E-commerce",
            "Lead Generation",
            "Business Tools",
            "S.E.O.",
            "Consulting",
            "Design"
        ],
        backDelay: 1200,
        backSpeed: 80,
        typeSpeed: 100,
        loop: true,
        loopCount: Infinity
    };

    var typed = new Typed("#js_target_one", options);
});
