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
    browserResults.insertAdjacentHTML("afterbegin", browserOutput);
}

////////////////////////////////////////////////////////////////////
// "main" function

function browserData(data) {
    $(document).ready(function() {
            const browserJSONUrl = "/techHQ/json/browsers.json";

            // Get JSON Data
            $.getJSON(browserJSONUrl, function(data) {

                console.log("data: " + data);

                for (let i in data)
                {

                    const objectKey1 = Object.keys(data);
                    const objectValue1 = Object.value(data);

                    for (let items in data)
                    {
                        const foobar = data[items];

                        console.log(foobar);

                    }

                } // ends getJSON loop

            });

    });
}