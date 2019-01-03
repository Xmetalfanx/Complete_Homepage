var desktopResults = document.getElementById('desktopSection');
var screenshotDIR = "/linuxHQ/screenshots/";


function displayDEOutput(currentDEName, currentDETitle, currentDEScreenshot, currentDEScreenshotTN, currentDELatestVersion)
{

    // Template Literal for output

    const DEScreenshotOutput = `
    <a href="${screenshotDIR}${currentDEScreenshot}" target="_blank">
        <img class="d-block mx-auto p-4 img-fluid" src="${screenshotDIR}${currentDEScreenshotTN}" alt="{currentDETitle} Screenshot">
    </a>
    
    `;

    // Complete Header 
    const deInfoCard = `

        <div class="card w-33 d-inline-block align-top">
            <div class="card-header bg-primary text-white font-weight-bold">
                <h3>${currentDETitle}</h3>
            </div>

            <div class="d-none d-md-inline-block card-text">
                ${DEScreenshotOutput}
            </div>
        </div>
            
        
            `;

    // Main output
    desktopResults.insertAdjacentHTML("beforeend", deInfoCard);

}
////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function getDesktopData(data) {

    $(document).ready(function() {

        jsonURL = "http://xmetal.x10.mx/linuxHQ/json/desktops.json";

        // Get JSON Data
        $.getJSON(jsonURL, function(data) {

            // For each key value 
            $.each(data, function(key, value) {

                // The key is 'gtk2' or 'qt'

                var currentFramework = key;

                for (var subFrameworks = 0; subFrameworks < value.length; subFrameworks++) {

                    // ** I need to know value and subFrameworks here 

                    var currentDEName = value[subFrameworks].desktopName;
                    var currentDETitle = value[subFrameworks].desktopTitle;

                    // Leave this for now ... I may want to make the Title displayed a link to the homepage of the DE 
                    var currentDEHomepage = value[subFrameworks].generalInfo.desktopHomepage;

                    var currentDELatestVersion = value[subFrameworks].versions.latestVersion;

                    // Screenshot
                    var currentDEScreenshot = value[subFrameworks].screenshots.src;
                    var currentDEScreenshotTN = value[subFrameworks].screenshots.thumbnail;

                    // End Version vars
                    ///////////////////////////////////////////////////////////////////////////////////
                
                    // Removing the if statement here should make it cycle through the entire JSON list 
                    displayDEOutput(currentDEName, currentDETitle, currentDEScreenshot, currentDEScreenshotTN, currentDELatestVersion);
                    
                }

            }); // Ends .each loop 

        }); // ends getJSON loop


    });

}