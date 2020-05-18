import Typed from "./typed.js";

$(document).ready(function() {
    var options = {
        strings: [
            "Websites",
            "E-commerce",
            "Lead Generation",
            "Business Automation",
            "S.E.O.",
            "Consulting",
            "Design"
        ],
        backDelay: 1400,
        backSpeed: 60,
        typeSpeed: 80,
        loop: true,
        loopCount: Infinity
    };

    var typed = new Typed("#js_target_one", options);
});
