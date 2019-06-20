// let for where to put the output
let distroResults = document.getElementById("distroSection");

let myPage = "/linuxHQ/distro/";
let DWPage = "https://distrowatch.com/";
let distroGraphics = "/linuxHQ/graphics/distros/";
let YTPLBase = "https://www.youtube.com/playlist?list=";
let YTPLEmbeddedBase = "https://www.youtube.com/embed/videoseries?list=";

function displayDistroOutput(currentDistroFamily, currentDistroName, currentDistroIcon, currentDistroTitle, currentDistroHomepage, currentDistroDownload, currentDistroForum, currentDistroScreenshot, currentDistroScreenshotTN, currentDistroYTReviewPLaylist, currentDistroYTTipsPLaylist, currentDistroFeaturesDesktops, currentDistroSimilarDistros, currentDistroTargetAudience, currentDistroSoftwareType) {

    let distroSShotPath = '/linuxHQ/screenshots/' + currentDistroFamily + '/';
    let distroSShotTNPath = distroSShotPath + 'thumbnails/';

    // Template Literal for output

    const currentDistroSShotOutput = `

        <a href="${distroSShotPath}${currentDistroScreenshot}" target="_blank">
            <img class="img-fluid p-2 lazyload" data-src="${distroSShotTNPath}${currentDistroScreenshotTN}" alt="${currentDistroTitle} Screenshot" >
        </a>
    `;

    const currentDistroMoreInfoOutput = `

        <span class="font-weight-bold">Target Audience: </span>${currentDistroTargetAudience}<br />
        <span class="font-weight-bold">Featured Desktops: </span>${currentDistroFeaturesDesktops}<br />
        <span class="font-weight-bold">Similar Distros: </span>${currentDistroSimilarDistros}<br />


    `;

    const currentDistroYTOutput = `

        <h4 class="font-weight-bold">Youtube Playlists</h4>

        <div class="row d-none d-lg-inline">
            <div class="col d-inline">
                <iframe class="YTPlaylists" src="${YTPLEmbeddedBase}${currentDistroYTReviewPLaylist}" target="_blank" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
            <div class="col d-inline">
                <iframe class="YTPlaylists" src="${YTPLEmbeddedBase}${currentDistroYTTipsPLaylist}" target="_blank" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="row d-lg-none d-xs-block">
            <div class="col">
                <a href="${YTPLBase}${currentDistroYTReviewPLaylist}" target="_blank">Youtube Review/Walkthrough/Comments Playlist </a>
            </div>
            <div class="col">
                <a href="${YTPLBase}${currentDistroYTTipsPLaylist}" target="_blank">Youtube Tips/Tricks/Tutorial Playlist</a>
            </div>
        </div>
    `;

    const currentDistroInfoOutput = `

        <div class="card">
            <div class="card-title m-0 p-2 bg-primary text-white">
                <div class="row pl-3">
                    <img src="${distroGraphics}${currentDistroIcon}" alt="${currentDistroTitle} icon" style="width: 48px;height: 48px;">
                        <h2 class="font-weight-bold pl-3">${currentDistroTitle}</h2>
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

                            <span class="font-weight-bold">Distrowatch Page: </span>
                                <a href="${DWPage}${currentDistroName}" blank="_blank">${currentDistroTitle} Distrowatch Link
                                </a>

                            <br />
                            <br />

                            <div>
                                <h3 class="font-weight-bold font-italic"> Versions</h3>

                                <span class="font-weight-bold">Latest Version: </span><br />
                                <br />
                                <span class="font-weight-bold">Currently Supported Versions: <br />
                            </div>
                            <br />
                            <hr />


                            ${currentDistroMoreInfoOutput}
                        </div>

                        <div class="col d-none d-md-inline">
                            ${currentDistroSShotOutput}
                        </div>
                    </div>

                    <br />
                    <hr />

                    ${currentDistroYTOutput}

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

            for (let distroFamily = 0; distroFamily < value.length; distroFamily++) {

                //////////////////////////////////////////////////////////////////////////
                // DECLARE letIABLES

                let currentDistroFamily = key;

                // Name/Title
                let currentDistroName = value[distroFamily].distroName;
                let currentDistroTitle = value[distroFamily].distroTitle;

                // graphics
                let currentDistroIcon = value[distroFamily].graphics.iconURL;

                // moreInfo
                let currentDistroFeaturesDesktops = value[distroFamily].moreinfo.desktops;
                let currentDistroSimilarDistros = value[distroFamily].moreinfo.similar;
                let currentDistroTargetAudience = value[distroFamily].moreinfo.target;

                // I think i meant "rolling, ...etc for this let"
                let currentDistroSoftwareType = value[distroFamily].moreinfo.software;

                // Website
                let currentDistroHomepage = value[distroFamily].website.homepage;
                let currentDistroDownload = value[distroFamily].website.download;
                let currentDistroForum = value[distroFamily].website.forum;

                // Screenshot
                let currentDistroScreenshotTN = value[distroFamily].screenshots.thumbnails;
                let currentDistroScreenshot = value[distroFamily].screenshots.src;

                // Youtube Playlists
                let currentDistroYTReviewPLaylist = value[distroFamily].youtube.reviewPlaylist;
                let currentDistroYTTipsPLaylist = value[distroFamily].youtube.tipsPlaylist;

                ////////////////////////////////////////////////////////////////////////////

                if (localDistroName == currentDistroName) {
                    displayDistroOutput(currentDistroFamily, currentDistroName, currentDistroIcon, currentDistroTitle, currentDistroHomepage, currentDistroDownload, currentDistroForum, currentDistroScreenshot, currentDistroScreenshotTN, currentDistroYTReviewPLaylist, currentDistroYTTipsPLaylist, currentDistroFeaturesDesktops, currentDistroSimilarDistros, currentDistroTargetAudience, currentDistroSoftwareType);
                }

            }

        }); // Ends .each loop

    }); // ends getJSON loop
}