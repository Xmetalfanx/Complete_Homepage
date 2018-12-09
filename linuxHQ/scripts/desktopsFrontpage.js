var desktopResults = document.getElementById('desktopSection');
var screenshotDIR = "/linuxHQ/screenshots/";


function displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEGithub, currentDEScreenshot, currentDEScreenshotTN, currentDELatestVersion, currentDEVerUpdated, currentDECategory, currentDEDistroFeature )
{

    // Template Literal for output

    // used INSIDE the tabs below and not seperately 
    const deVersionsOutput = `
        

        `;


        const DEScreenshotOutput = `
        <a href="${screenshotDIR}${currentDEScreenshot}" target="_blank">
            <img class="d-block mx-auto p-4 img-fluid" src="${screenshotDIR}${currentDEScreenshotTN}" alt="{currentDETitle} Screenshot">
        </a>
        
        `;

    // Complete Header 
    const deInfoCard = `

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="font-weight-bold">${currentDETitle}</h3>
                </div>
                <div class="card-text px-3 py-2">
                    <div class="row"> 
                        <div class="col">
                            <span class="font-weight-bold">Homepage:</span>
                            <a href="${currentDEHomepage}" target="_blank"> ${currentDETitle}'s Homepage</a>
                            <br>

                            <span class="font-weight-bold">Latest Version: </span>${currentDELatestVersion}<br>
                            
                            <span class="font-weight-bold">Desktop Category: </span>${currentDECategory}<br>
                            <span class="font-weight-bold">Distros That Feature: </span>${currentDEDistroFeature}<br>
                        
                            <br>
                        </div>
                        
                    </div>
                    

                        ${deVersionsOutput}

                        <br /><hr />
            
                
                </div> <!-- Closes card-text -->
            </div> <!-- Closes card --> 
                
            `;

        // Main output
        console.log("currentDEScreenshot: " + currentDEScreenshot);
        desktopResults.insertAdjacentHTML("beforeend", deInfoCard);

}

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

                    // Requirnments
                    var currentDEReqMem = value[subFrameworks].requirements.reqMemory;
                    var currentDEReqHDD = value[subFrameworks].requirements.reqHDDSpace;
                    var currentDEReqProc = value[subFrameworks].requirements.reqProcessor;

                    // Screenshot
                    var currentDEScreenshot = value[subFrameworks].screenshots.src;
                    var currentDEScreenshotTN = value[subFrameworks].screenshots.thumbnails;

                    // End Version vars
                    ///////////////////////////////////////////////////////////////////////////////////
                
                    if (localDEName == currentDEName)
                    {
                    displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEGithub, currentDEScreenshot, currentDEScreenshotTN, currentDELatestVersion, currentDEVerUpdated, currentDECategory, currentDEDistroFeature);
                    } 
                }

            }); // Ends .each loop 

        }); // ends getJSON loop


    });

}