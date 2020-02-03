let browserResults = document.getElementById("browserSection");
let browserIconsDir = "/techHQ/progIcons/internet/browsers/";

// The idea of this is to MAYBE shorten the URL in the "col1" file ... .URl would be "${browserAdBlockDir}/exactfile.php" for example
// an IDEA only for now
let browserAdBlockDir = "/techHQ/browsers/adblocking/";


// Browser Engines - HP means Homepage or something that can explain
let goannaHP = "<a href=\"http://www.moonchildproductions.info/goanna.shtml\" target=\"_blank\"> Goanna Engine by Moonchild Productions </a> <br /><br /><a href=\"https://github.com/MoonchildProductions/UXP\" target=\"_blank\">Source on Github</a>"

////////////////////////////////////////////////////////////////////
// "main" function

function browserData(data) {
    $(document).ready(function() {
        const browserJSONUrl = "/techHQ/json/browsers.json";

        // Get JSON Data
        $.getJSON(browserJSONUrl, function(data) {

            // console.log("data: " + data);

            // Data is the entire JSON content
            for (let i in data) {
                // I think this is just the number 
                const currentEngine = Object.keys(data);
                console.log("currentEngine: " + currentEngine);

                const EngineBrowser = Object.values(data[i]);
                // console.log(EngineBrowser);

                for (j in EngineBrowser) {

                    const currentBrowser = EngineBrowser[j];

                    const browserName = currentBrowser.browserName;
                    const browserTitle = currentBrowser.browserTitle;

                    const browserIcon = currentBrowser.links.browserIcon;

                    const browserHomepage = currentBrowser.links.homepage;
                    const browserDownload = currentBrowser.links.download;

                    const browserVersion = currentBrowser.moreInfo.version;
                    const browserPlatforms = currentBrowser.moreInfo.platforms;
                    const browserDescription = currentBrowser.moreInfo.description;

                    const browserOutput = `

                        <div class="card m-4 border border-primary">
                            <div class="card-header">
                                <div class="col-6 float-left">
                                    <a href="${browserHomepage}" blank="_blank">
                                        <img src="${browserIconsDir}${browserIcon}" class="graphicsfortyeight lazyload" />
                                        ${browserTitle}

                                    </a>
                                </div>
                                <div class="col-4 float-right">
                                    Version: ${browserVersion}
                                </div>
                            </div>

                            <div class="card-text p-2">
                                <div class="float-left">
                                    <span class="font-weight-bold">Platform(s): </span>
                                    ${browserPlatforms}
                                </div>
                                <div class="float-right">
                                    <span class="font-weight-bold">
                                    Browser Engine:
                                    </span>
                                    ${currentEngine}
                                    
                                </div>

                                <br /><br />
                                <a href="${browserDownload} " target+"blank"> Download Page</a>
                                
                                <br /><br />
                                <span class="font-weight-bold">Description: </span>
                                <span class="">${browserDescription}
                            </div>
                        </div>
                        `

                    // Main output
                    browserResults.insertAdjacentHTML("afterbegin", browserOutput);
                }

            } // ends getJSON loop

        });

    });
}