let browserResults = document.getElementById("browserSection");
let browserIconsDir = "/techHQ/progIcons/internet/browsers/";

// The idea of this is to MAYBE shorten the URL in the "col1" file ... .URl would be "${browserAdBlockDir}/exactfile.php" for example
// an IDEA only for now
let browserAdBlockDir = "/techHQ/browsers/adblocking/";

////////////////////////////////////////////////////////////////////
// "main" function

function browserData(data) {
    $(document).ready(function() {
            const browserJSONUrl = "/techHQ/json/browsers.json";

            // Get JSON Data
            $.getJSON(browserJSONUrl, function(data) {

                // console.log("data: " + data);

                // Data is the entire JSON content
                for (let i in data)
                {
                    // I think this is just the number 
                    const currentEngine = Object.keys(data[i]);
                    // console.log(currentEngine);

                    const EngineBrowser = Object.values(data[i]);
                    // console.log(EngineBrowser);

                    for (j in EngineBrowser)
                    {
                        // console.log("j: " + j);

                        const currentBrowser = EngineBrowser[j];

                        const browserName = currentBrowser.browserName;
                        const browserTitle = currentBrowser.browserTitle;

                        const browserIcon = currentBrowser.links.browserIcon;

                        const browserHomepage = currentBrowser.links.homepage;
                        const browserDownload = currentBrowser.links.download;

                        const browserVersion = currentBrowser.moreInfo.version;
                        const browserPlatforms = currentBrowser.moreInfo.platforms;

                        // console.log("browserName: " + browserName);

                        // console.log("browserHomepage: " + browserHomepage);

                        const browserOutput = `

                        Browser Engine: ${currentEngine}

                        <div class="card m-4 border border-primary">
                            <div class="card-header">
                                <div class="col-6 float-left">
                                    <a href="${browserHomepage}" blank="_blank">
                                        <img src="${browserIconsDir}${browserIcon}" class="graphicsfortyeight" />
                                        ${browserTitle}

                                    </a>
                                </div>
                                <div class="col-4 float-right">
                                    Version: ${browserVersion}
                                </div>
                            </div>

                            <div class="card-text">
                                <a href="${browserDownload} " target+"blank"> Download Page: </a>
                                <br /><br />
                                Platform(s): ${browserPlatforms}
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