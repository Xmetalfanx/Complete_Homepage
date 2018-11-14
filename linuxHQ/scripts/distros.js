// var for where to put the output
var distroResults = document.getElementById("distroSection");

function displayDistroOutput(currentDistroTitle, currentDistroHomepage, currentDistroFeaturesDesktops, currentDistroSimilarDistros, currentDistroTargetAudience, currentDistroDistroWatchURL) {

    // Template Literal for output
    // Download and Forum links below are wrong 
    const currentDistroInfoOutput = `


        <div class="card">
            <div class="card-title">
                <div class="font-weight-bold h2">${currentDistroTitle}</div>
            </div>
        
        <div class="card-text">
            <div class="row"> 
                <span class="font-weight-bold">Homepage: </span>
                <a href="${currentDistroHomepage}" target="_blank">${currentDistroTitle}'s Homepage</a><br />
                <span class="font-weight-bold">Download: </span>
                <a href="${currentDistroHomepage}" target="_blank">${currentDistroTitle}'s Download Page</a><br />
                <span class="font-weight-bold">Forums:</span>
                <a href="${currentDistroHomepage}" target="_blank">${currentDistroTitle}'s Forum</a><br />
            </div>
        
            <div class="row">
                <div class="font-weight-bold">Distrowatch Page: </div>
                    <a href="${currentDistroDistroWatchURL}" blank="_blank">${currentDistroTitle} Distrowatch Link </a>
                    <br/>
                <div class="font-weight-bold">Target Audience: </div>
                    ${currentDistroTargetAudience} <br />
                <div class="font-weight-bold">Featured Desktops: </div>
                    ${currentDistroFeaturesDesktops}<br />
                <div class="font-weight-bold">Similar Distros: </div>
                    ${currentDistroSimilarDistros}<br />
                <span class="font-weight-bold">
                Software Type: </span>
            </div>
            <br /><br />
            
            <div class="row"> 
                <div class="col-6">
                    <span class="font-weight-bold">Youtube Playlists</span><br/>
                    <span class="font-weight-bold">Youtube Reviews and Comment Playlist: </span>
                </div>
                <div class="col-6">
                    <span class="font-weight-bold">Youtube Tweaks and Tips Playlist</span>
                </div>
            </div>
        </div>
    </div>


        <hr />
        `;


        distroResults.insertAdjacentHTML("beforeend", currentDistroInfoOutput);
};

// "main" function
function getDistroData(data, $localDistroName) {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/distros.json";

    // Get JSON Data
    $.getJSON(jsonURL, function(data) {

        $.each(data, function(key, value) {

            for (var distroFamily = 0; distroFamily < value.length; distroFamily++)
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

                if (localDistroName == currentDistroName)
                {
                    displayDistroOutput(currentDistroTitle, currentDistroHomepage, currentDistroFeaturesDesktops, currentDistroSimilarDistros, currentDistroTargetAudience, currentDistroDistroWatchURL);
                }

            }

        }); // Ends .each loop 

    }); // ends getJSON loop
}