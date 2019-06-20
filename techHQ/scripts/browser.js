let browserResults = document.getElementById("browserSection");
let browserIconsDir = "/techHQ/progIcons/internet/browsers/";

// The idea of this is to MAYBE shorten the URL in the "col1" file ... .URl would be "${browserAdBlockDir}/exactfile.php" for example
// an IDEA only for now
let browserAdBlockDir = "/techHQ/browsers/adblocking/";



function browserDisplay(browserTitle, browserIcon, currentBrowserEngine, browserHomepage, browserDownload) {

    const browserOutput = `
        <div class="card m-4 border border-primary">
            <div class="card-header">
                <img src="${browserIconsDir}${browserIcon}" class="graphicsfortyeight" />
                <a href="${browserHomepage}" blank="_blank"> ${browserTitle}  </a>
            </div>

            <div class="card-text">
                Browser Engine: ${currentBrowserEngine}
                <p>
                    <a href="${browserDownload} " target+"blank"> Download Page: </a>
                </p>
            </div>
        </div>
        `;

    // Main output
    browserResults.insertAdjacentHTML("afterbegin", browserDisplay);
}

////////////////////////////////////////////////////////////////////
// "main" function

function browserData(data) {

    $(document).ready(function() {

        // "Things DO GET HERE, successfully"
        // console.log("Inside softwareData function in JS");

        browserJSONUrl = "http://xmetal.x10.mx/techHQ/json/browsers.json";

        // Get JSON Data
        $.getJSON(browserJSONUrl, function(data) {

            // For each key value - in this case mainCatagory
            $.each(data, function(key, value) {

                let currentBrowserEngine = key;
                // console.log(currentBrowserEngine);

                for (let browserEngine = 0; browserEngine < value.length; browserEngine++) {

                    let browserName = value[browserEngine].browserName;
                    let browserTitle = value[browserEngine].browserTitle;

                    // I think i will not use a combo of fork awesome "icons" and png .. templatifying this would be too messy
                    // Just going with CLEAR images ... SVG's if possible
                    let browserIcon = value[browserEngine].links.browserIcon;

                    // Links
                    // ?? how to handle icons ... some are in Fork Awesome .. some aren't - maybe have the full HTML in the JSON entry
                    let browserHomepage = value[browserEngine].links.homepage;
                    let browserDownload = value[browserEngine].links.download;

                    // in LinuxHQ JS files the call to display function us usually here
                    browserOutput(browserTitle, browserIcon, currentBrowserEngine, browserHomepage, browserDownload);
                }

            }); // Ends .each loop

        }); // ends getJSON loop


    });

}