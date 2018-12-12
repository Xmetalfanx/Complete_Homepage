// var for where to put the output
var distroResults = document.getElementById("distroSection");

var myPage = "/linuxHQ/distro/";
var DWPage = "https://distrowatch.com/";
var distroGraphics = "/linuxHQ/graphics/distros/";

function displayDistroOutput(currentDistroFamily, currentDistroName, currentDistroIcon, currentDistroTitle, currentDistroHomepage, currentDistroDownload, currentDistroForum, currentDistroScreenshot, currentDistroScreenshotTN, currentDistroFeaturesDesktops, currentDistroSimilarDistros, currentDistroTargetAudience, currentDistroSoftwareType) 
{

    var distroSShotPath = '/linuxHQ/screenshots/' + currentDistroFamily + '/';

    var distroSShotTNPath = distroSShotPath + 'thumbnails/';


    // Template Literal for output

    const currentDistroSShotOutput = `
    
        <a href="${distroSShotPath}${currentDistroScreenshot}" target="_blank">
            <img class="img-fluid p-2" src="${distroSShotTNPath}${currentDistroScreenshotTN}" alt="${currentDistroTitle} Screenshot" >
        </a>
    `;

    const currentDistroInfoOutput = `

        <div class="card">
            <div class="card-title m-0 p-2 bg-primary text-white">
                <div class="row pl-3">
                <img src="${distroGraphics}${currentDistroIcon}" alt="${currentDistroTitle} icon" style="width: 48px;height: 48px;">
                    <div class="font-weight-bold h2 pl-3">${currentDistroTitle}</div>
                </div>
            </div>
            <div class="card-text p-2">
                <div class="row">
                    <div class="col d-md-inline">
                    
                        <span class="font-weight-bold">Homepage: </span>
                            <a href="${currentDistroHomepage}" target="_blank">${currentDistroTitle}'s Homepage</a><br/>
                        
                        <span class="font-weight-bold">Download: </span>
                            <a href="${currentDistroDownload}" target="_blank">${currentDistroTitle}'s Download Page</a><br/>
                        
                        <span class="font-weight-bold">Forums:</span>
                            <a href="${currentDistroForum}" target="_blank">${currentDistroTitle}'s Forum</a><br/>
                        
                        <div>
                            <span class="font-weight-bold">Distrowatch Page: </span>
                            <a href="${DWPage}${currentDistroName}" blank="_blank">${currentDistroTitle} Distrowatch Link 
                            </a>
                        </div>
                        <br/>
                    
                        <div> 
                            <span class="font-weight-bold">Target Audience: </span>${currentDistroTargetAudience}</div>
                        <div>
                            <span class="font-weight-bold">Featured Desktops: </span>${currentDistroFeaturesDesktops}</div>
                        <div>
                            <span class="font-weight-bold">Similar Distros: </span>${currentDistroSimilarDistros}</div>
                        <div>
                            <span class="font-weight-bold">Software Type: </span>${currentDistroSoftwareType}</div>
                        </div>
                    
                    <div class="col d-none d-md-inline">
                        ${currentDistroSShotOutput}
                    </div>
                </div>

            <br />
            <hr />

            <span class="font-weight-bold h4">Youtube Playlists </span>
                <div class="col-6">
                    <span class="font-weight-bold">Youtube Reviews and Comment Playlist: </span>
                </div>
                
                <div class="col-6">
                    <span class="font-weight-bold">Youtube Tweaks and Tips Playlist: </span>
                </div>
            </div>
        </div>

        `;


    distroResults.insertAdjacentHTML("beforeend", currentDistroInfoOutput);
};

// "main" function
function getDistroData(data, $localDistroName) {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/distros.json";

    // Get JSON Data
    $.getJSON(jsonURL, function(data) {

        $.each(data, function(key, value) {

            for (var distroFamily = 0; distroFamily < value.length; distroFamily++) {

                //////////////////////////////////////////////////////////////////////////
                // DECLARE VARIABLES

                var currentDistroFamily = key;

                // Name/Title
                var currentDistroName = value[distroFamily].distroName;
                var currentDistroTitle = value[distroFamily].distroTitle;

                // graphics
                var currentDistroIcon = value[distroFamily].graphics.iconURL;

                // moreInfo
                var currentDistroFeaturesDesktops = value[distroFamily].moreinfo.desktops;
                var currentDistroSimilarDistros = value[distroFamily].moreinfo.similar;
                var currentDistroTargetAudience = value[distroFamily].moreinfo.target;

                // I think i meant "rolling, ...etc for this var"
                var currentDistroSoftwareType = value[distroFamily].moreinfo.software;

                // Website
                var currentDistroHomepage = value[distroFamily].website.homepage;
                var currentDistroDownload = value[distroFamily].website.download;
                var currentDistroForum = value[distroFamily].website.forum;

                // Screenshot 
                var currentDistroScreenshotTN = value[distroFamily].screenshots.thumbnails;
                var currentDistroScreenshot = value[distroFamily].screenshots.src;

                ////////////////////////////////////////////////////////////////////////////

                if (localDistroName == currentDistroName) {
                    displayDistroOutput(currentDistroFamily, currentDistroName, currentDistroIcon, currentDistroTitle, currentDistroHomepage, currentDistroDownload, currentDistroForum, currentDistroScreenshot, currentDistroScreenshotTN, currentDistroFeaturesDesktops, currentDistroSimilarDistros, currentDistroTargetAudience, currentDistroSoftwareType);
                }

            }

        }); // Ends .each loop 

    }); // ends getJSON loop
}