// var for where to put the output
var distroResults = document.getElementById("distroSection");

var myPage = "/linuxHQ/distro/";
var distroGraphics = "/linuxHQ/graphics/distros/";

function displayDistroOutput(
  currentDistroFamily,
  currentDistroName,
  currentDistroIcon,
  currentDistroTitle,
  currentDistroHomepage,
  currentDistroScreenshot,
  currentDistroScreenshotTN
) {
  // Screenshot vars
  var distroSShotPath = "/linuxHQ/screenshots/" + currentDistroFamily + "/";
  var distroSShotTNPath = distroSShotPath + "thumbnails/";

  // Template Literal for output

  const currentDistroSShotOutput = `

        <a href="${distroSShotPath}${currentDistroScreenshot}" target="_blank">
            <img class="d-none d-md-block lazyload thumbnails mx-auto shadow" data-src="${distroSShotTNPath}${currentDistroScreenshotTN}" alt="${currentDistroTitle} Screenshot" >
        </a>
    `;

  const currentDistroInfoOutput = `

        <div class="card pb-3 align-self-start flex-fill">
            <div class="card-header pl-2">
                    <h4 class="font-weight-bold">
                        <img src="${distroGraphics}${currentDistroIcon}" alt="${currentDistroTitle} icon" class="iconSM mr-1"> ${currentDistroTitle}
                    </h4>
            </div>

            <div class="card-text p-2">
                <div class="row">
                    <div class="col d-md-inline">
                        <span class="font-weight-bold">Homepage: </span>
                            <a href="${currentDistroHomepage}" target="_blank">${currentDistroTitle}'s Homepage</a>${currentDistroSShotOutput}
                        </div>

                    </div>

                    <br />
                    <hr />

                </div>
            </div>
        </div>

        `;

  distroResults.insertAdjacentHTML("beforeend", currentDistroInfoOutput);
}

// "main" function
function getDistroData(data, $localDistroName) {
  jsonURL = "/linuxHQ/json/distros.json";

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

        // Website
        var currentDistroHomepage = value[distroFamily].website.homepage;

        // Screenshot
        var currentDistroScreenshotTN =
          value[distroFamily].screenshots.thumbnails;
        var currentDistroScreenshot = value[distroFamily].screenshots.src;

        var currentDistroFeatured = value[distroFamily].moreinfo.featured;

        if (currentDistroFeatured == "yes") {
          displayDistroOutput(
            currentDistroFamily,
            currentDistroName,
            currentDistroIcon,
            currentDistroTitle,
            currentDistroHomepage,
            currentDistroScreenshot,
            currentDistroScreenshotTN
          );
        }
      }
    }); // Ends .each loop
  }); // ends getJSON loop
}
