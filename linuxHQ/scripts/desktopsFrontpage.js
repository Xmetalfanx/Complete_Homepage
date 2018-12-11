var desktopResults = document.getElementById('desktopSection');
var screenshotDIR = "/linuxHQ/screenshots/";


function displayDEOutput(currentDEName, currentDETitle, currentDEScreenshot, currentDEScreenshotTN, currentDELatestVersion, currentDEVerUpdated )
{

    // Template Literal for output


        const DEScreenshotOutput = `
        <a href="${screenshotDIR}${currentDEScreenshot}" target="_blank">
            <img class="d-block mx-auto p-4 img-fluid" src="${screenshotDIR}${currentDEScreenshotTN}" alt="{currentDETitle} Screenshot">
        </a>
        
        `;

    // Complete Header 
    const deInfoCard = `

            
           
                
            `;

        // Main output
        console.log("currentDEScreenshot: " + currentDEScreenshot);
        desktopResults.insertAdjacentHTML("beforeend", deInfoCard);


////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function getDesktopData(data, $localDEName) {

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

                    // More Info
                    var currentDEHomepage = value[subFrameworks].generalInfo.desktopHomepage;
                    var currentDEGithub = value[subFrameworks].generalInfo.desktopGithubURL;
                    var currentDECategory = value[subFrameworks].generalInfo.desktopCatagory;
                    var currentDEDistroFeature = value[subFrameworks].generalInfo.distrosFeature;


                    // Screenshot
                    var currentDEScreenshot = value[subFrameworks].screenshots.src;
                    var currentDEScreenshotTN = value[subFrameworks].screenshots.thumbnails;

                    // End Version vars
                    ///////////////////////////////////////////////////////////////////////////////////
                
                  
                    displayDEOutput(currentDEName, currentDETitle, currentDEScreenshot, currentDEScreenshotTN, currentDELatestVersion, currentDECategory, currentDEDistroFeature);
                    
                }

            }); // Ends .each loop 

        }); // ends getJSON loop


    });

}