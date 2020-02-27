let desktopResults = document.getElementById('desktopSection');
let screenshotDIR = "/linuxHQ/screenshots/";

function displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEScreenshot, currentDEScreenshotTN, currentDESShotDistro)
{

    const deInfoCard = `

        <div class="card pb-4 flex-fill align-self-start">
            <div class="card-header bg-primary text-white py-2 font-weight-bold">
                <h3>
                    <a href="${currentDEHomepage}" target="_blank" rel="noopener"> ${currentDETitle}
                    </a>
                </h3>
            </div>

            <div class="d-md-inline-block d-none card-text p-3">
                <a href="${screenshotDIR}${currentDEScreenshot}" target="_blank">
                    <img class="d-block lazyload thumbnails mx-auto shadow" data-src="${screenshotDIR}${currentDEScreenshotTN}" alt="{currentDETitle} Screenshot">
                </a>
                    <span class="font-weight-bold"> Distro:${currentDESShotDistro}
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

        jsonURL = "/linuxHQ/json/desktops.json";

        // Get JSON Data
        $.getJSON(jsonURL, function(data) {

            // For each key value
            $.each(data, function(key, value) {

                // The key is 'gtk2' or 'qt'

                let currentFramework = key;

                for (let subFrameworks = 0; subFrameworks < value.length; subFrameworks++) {

                    // ** I need to know value and subFrameworks here

                    let currentDEName = value[subFrameworks].desktopName;
                    let currentDETitle = value[subFrameworks].desktopTitle;

                    // Leave this for now ... I may want to make the Title displayed a link to the homepage of the DE
                    let currentDEHomepage = value[subFrameworks].generalInfo.desktopHomepage;

                    // Screenshot
                    let currentDESShot = value[subFrameworks].screenshots.src;
                    let currentDESShotTN = value[subFrameworks].screenshots.thumbnail;
                    let currentDESShotDistro = value[subFrameworks].screenshots.distro;

                    // End Version lets
                    ///////////////////////////////////////////////////////////////////////////////////

                    // Removing the if statement here should make it cycle through the entire JSON list
                    displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDESShot, currentDESShotTN, currentDESShotDistro);

                }

            }); // Ends .each loop

        }); // ends getJSON loop


    });

}