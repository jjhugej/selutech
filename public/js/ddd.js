$(document).ready(function() {
    //design
    $("#designBtn").click(function(e) {
        $("#dddDescriptionContainer")
            .empty()
            .append(
                '<div id="designDesc" class="dddDescription"><h1>Designed with the user in mind</h1><ul><li>Responsive web sites that fit any device</li><li>Sleek and intuitive user interfaces</li><li>Completely custom designs to fit your brand</li></ul></div>'
            );
    });

    //develop
    $("#developBtn").click(function() {
        $("#dddDescriptionContainer")
            .empty()
            .append(
                '<div id="developDesc" class="dddDescription"><h1>Custom built code</h1><ul><li>Fast as lightning</li><li>Minimize bloat and dependencies</li><li>Automated web tools</li></ul> </div>'
            );
    });

    //deploy
    $("#deployBtn").click(function() {
        $("#dddDescriptionContainer")
            .empty()
            .append(
                //'<div id="developDesc" class="dddDescription"><h1>Custom developed code</h1><ul><li>Fast as lightning</li><li>Minimize bloat and dependencies with custom code</li><li>Automated web tools for your business</li></ul> </div>'
                '<div id="deployDesc" class="dddDescription"><h1>Let us handle the setup</h1><ul><li>Domain registration</li><li>Server configuration and optimization</li><li>Site security and maintenance</li></ul></div>'
            );
    });
});
