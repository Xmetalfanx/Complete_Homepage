// var for where to put the output
var distroResults = document.getElementById('linux-primary-content');

var myPage = '/linuxHQ/distro/';
var distroGraphics = '/linuxHQ/graphics/distros/';

function displayDistroOutput(
  currentDistroFamily,
  currentDistroName,
  currentDistroIcon,
  currentDistroTitle,
  currentDistroHomepage,
  currentDistroScreenshot,
  currentDistroScreenshotTN,
  currentDistroSSTheme,
  currentDistroSSDesktop
) {
  // Screenshot vars
  var distroSShotPath = '/linuxHQ/screenshots/' + currentDistroFamily + '/';
  var distroSShotTNPath = distroSShotPath + 'thumbnails/';

  // Template Literal for output

  const currentDistroSShotOutput = `

        <!-- can i put css from , img-fluid into "thumbnails" css i already have? -->
        <a href="${distroSShotPath}${currentDistroScreenshot}" target="_blank">
            <img class="d-none d-md-block thumbnails--lg img-fluid" src="${distroSShotTNPath}${currentDistroScreenshotTN}" alt="${currentDistroTitle} Screenshot" loading="lazy" >

        </a>

        <span class="font-weight-bold">Desktop Environment: </span>${currentDistroSSDesktop}<br/><br />
        <span class="font-weight-bold">Theme used: </span>${currentDistroSSTheme}
    `;

  const currentDistroInfoOutput = `

        <div class="card">
          <div class="card__header">
            <div>
              <img src="${distroGraphics}${currentDistroIcon}" alt="${currentDistroTitle} icon" class="icon--size40">
              ${currentDistroTitle}
            </div>
            <!-- needed for CSS, even though it's an empty tag -->
            <div>
            </div>

          </div>

          <div class="card__body">

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
        var currentDistroSSTheme = value[distroFamily].screenshots.theme;
        var currentDistroSSDesktop= value[distroFamily].screenshots.desktop;

        // featured on the frontpage or not (yes or no value)
        var currentDistroFeatured = value[distroFamily].moreinfo.featured;

        if (currentDistroFeatured == 'yes') {
          displayDistroOutput(
            currentDistroFamily,
            currentDistroName,
            currentDistroIcon,
            currentDistroTitle,
            currentDistroHomepage,
            currentDistroScreenshot,
            currentDistroScreenshotTN,
            currentDistroSSTheme,
            currentDistroSSDesktop
          );
        }
      }
    }); // Ends .each loop
  }); // ends getJSON loop
}
