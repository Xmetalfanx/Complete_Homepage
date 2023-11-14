let desktopResults = document.getElementById('desktopSection');
let screenshotDIR = "/linuxHQ/screenshots/";

function displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEScreenshot, currentDEScreenshotTN, currentDESShotDistro)
{

    const deInfoCard = `

        <div class="card w-40">
            <div class="card__header py-2">
                <a href="${currentDEHomepage}" target="_blank" rel="noopener"> ${currentDETitle}</a>
            </div>

            <div class="card__body d-none d-md-inline-block">
                <figure>
                    <a href="${screenshotDIR}${currentDEScreenshot}" target="_blank">
                    <img class="thumbnail-fluid--lg" src="${screenshotDIR}${currentDEScreenshotTN}" alt="{currentDETitle} Screenshot" loading="lazy">

                    <figcaption>
                        <span class="font-weight-bold">Distro:</span>
                        ${currentDESShotDistro}
                    </figcaption>
                    </a>
                </figure>

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

        jsonURL = "/linuxHQ/json/desktops-min.json";

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
