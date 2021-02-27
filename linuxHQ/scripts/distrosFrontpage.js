// var for where to put the output
var distroResults = document.getElementById('linuxFrontPrimaryContent');

var myPage = '/linuxHQ/distro/';
var distroGraphics = '/linuxHQ/graphics/distros/';

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
  var distroSShotPath = '/linuxHQ/screenshots/' + currentDistroFamily + '/';
  var distroSShotTNPath = distroSShotPath + 'thumbnails/';

  // Template Literal for output

  const currentDistroSShotOutput = `
        <!-- thumbnails and thumbnails--lg, is my own css, NOT bootstrap -->
        <!-- lazyload css class needed for external lazyload script -->
        <!-- mx-auto is in my CSS but is being over-written atm while "bootstrap css" is still included in the head file -->

        <!-- can i put css from , img-fluid and mx-auto into "thumbnails" css i already have? -->
        <a href="${distroSShotPath}${currentDistroScreenshot}" target="_blank">
            <img class="d-none d-md-block lazyload thumbnails thumbnails--lg img-fluid mx-auto" data-src="${distroSShotTNPath}${currentDistroScreenshotTN}" alt="${currentDistroTitle} Screenshot" >
        </a>
    `;

  const currentDistroInfoOutput = `

        <div class="card pb-3 w-33">
          <div class="card-header pl-2">
            <h4>
                <img src="${distroGraphics}${currentDistroIcon}" alt="${currentDistroTitle} icon" class="icon--size40"> ${currentDistroTitle}
            </h4>
          </div>

          <div class="card-body">

            <span class="font-weight-bold">Homepage: </span>
            <a href="${currentDistroHomepage}" target="_blank">${currentDistroTitle}'s Homepage</a>${currentDistroSShotOutput}

            </div> <!-- closes card-body -->
          </div> <!-- closes card -->
        </div>
        `;

  distroResults.insertAdjacentHTML('beforeend', currentDistroInfoOutput);
}

// "main" function
function getDistroData(data, $localDistroName) {
  jsonURL = '/linuxHQ/json/distros.json';

  // Get JSON Data
  $.getJSON(jsonURL, function (data) {
    $.each(data, function (key, value) {
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

        if (currentDistroFeatured == 'yes') {
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
