// var for where to put the output
var desktopResults = document.getElementById("desktopSection");

function distroDisplay(data) {

    // Template Literal for output
    const currentDistroInfoOutput = `
        Distro Name: <strong>${currentDistroTitle}</strong><br /><br />

        <a href="${currentDistroHomepage}" target="_blank"> ${currentDistroTitle}'s Homepage</a><br />
        <a href="${currentDistroHomepage}" target="_blank"> ${currentDistroTitle}'s Download Page</a><br />
        <a href="${currentDistroHomepage}" target="_blank"> ${currentDistroTitle}'s Forum</a><br />
        
        
        Features Desktops: ${currentDistroFeaturesDesktops} <br />
        Similar Distrobutions: ${currentDistroSimilarDistros} <br />
        Target Audience: ${currentDistroTargetAudience} <br />
        Distrowatch: <a href=${currentDistroDistroWatchURL} blank="_blank"> ${currentDistroTitle} Distrowatch Link </a>
        <br />
        <hr />
        `;

        // Display Output
        document.write(currentDistroInfoOutput);
};

// "main" function
function getDistroData() {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/distros.json";

    // Get JSON Data
    $.getJSON(jsonURL, function(data) {

        $.each(data, function(key, value) {

            alert(key);
             
            // Copy and pasted ... change internal Var !
            for (var subFrameworks = 0; subFrameworks < value.length; subFrameworks++)
            { 
           
            //////////////////////////////////////////////////////////////////////////
            // DECLARE VARIABLES

            // Name/Title
            var currentDistroName = value[distroFamily].distroName;
            var currentDistroTitle = value[distroFamily].distroTitle;

            // graphics
            var currentDistroIcon = value[distroFamily].graphics.iconURL;

            // moreInfo
            var currentDistroFeaturesDesktops = value[distroFamily].moreinfo.desktops;
            var currentDistroSimilarDistros = value[distroFamily].moreinfo.similar;
            var currentDistroDistroWatchURL = value[distroFamily].moreinfo.distrowatch;
            var currentDistroTargetAudience = value[distroFamily].moreinfo.target;

                // I think i meant "rolling, ...etc for this var"
            var currentDistroSoftwareType = value[distroFamily].moreinfo.software;

            // Website
            var currentDistroHomepage = value[distroFamily].homepage;
            var currentDistroDownload = value[distroFamily].download;
            var currentDistroForum = value[distroFamily].forum;

            ////////////////////////////////////////////////////////////////////////////

            // Call to Display Here 

            }

        }); // Ends .each loop 

    }); // ends getJSON loop
}