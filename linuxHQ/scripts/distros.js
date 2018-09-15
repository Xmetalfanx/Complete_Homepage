// var for where to put the output
var desktopResults = document.getElementById("desktopSection");

function newLoopTest(data) {

    // data = the complete JSON

    // Outer loop
    $.each(data, function(key, value) {

        // The key is 'gtk2' or 'qt'
        // the value is the framework's "sub-json" to so speak
        var distroFamily = key;
        console.log("key: " + distroFamily);
        console.log("Value: "+ value);

        for (var distroFamily = 0; distroFamily < value.length; distroFamily++) {

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

            // Template Literal for output
            const distroNameOutput = `
                Distro Name: <strong>${currentDistroTitle}</strong><br />
            `;

            const distroWebsiteOutput = `
                <a href="${currentDistroHomepage}" target="_blank"> ${currentDistroTitle}'s Homepage</a><br />
                <a href="${currentDistroHomepage}" target="_blank"> ${currentDistroTitle}'s Download Page</a><br />
                <a href="${currentDistroHomepage}" target="_blank"> ${currentDistroTitle}'s Forum</a><br />
            `;
            
            const distroMoreInfoOutput = `
                <br />
                Features Desktops: ${currentDistroFeaturesDesktops} <br /> 
                Similar Distrobutions: ${currentDistroSimilarDistros} <br />
                Target Audience: ${currentDistroTargetAudience} <br />
                Distrowatch: <a href=${currentDistroDistroWatchURL} blank="_blank"> ${currentDistroTitle} Distrowatch Link </a>
                <br />
                <hr />

            `;

            // Display Output
            document.write(distroNameOutput);
            document.write(distroWebsiteOutput);
            document.write(distroMoreInfoOutput);
        }


    });
}

// "main" function
function getDistroData() {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/distros.json";

    // Get JSON Data
    $.getJSON(jsonURL, function(data) {

        newLoopTest(data);

    }); // ends getJSON loop
}