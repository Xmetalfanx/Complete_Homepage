let browserResults = document.getElementById("browserSection");
let browserIconDir = "/techHQ/progIcons/internet/browsers/";
let addonIconDir = "/techHQ/browsers/addons/graphics/";

// for Icons
let firefoxIcon = "${$browserIconDir}/icon8-firefox.svg";
let chromeIcon =  "${$browserIconDir}/icon8-chrome.svg";

////////////////////////////////////////////////////////////////////
// "main" function

function browserAddonData(data) {

    $(document).ready(function() {

        // "Things DO GET HERE, successfully"
        // console.log("Inside softwareData function in JS");

        browserAddonsJSONUrl = "/techHQ/json/browserAddons.json";

        // Get JSON Data
        $.getJSON(browserAddonsJSONUrl, function(data) {

            // For each key value - in this case mainCatagory
            $.each(data, function(key, value) {

                for (var platform in data)
                {
                    // Chrome? Firefox? Both? 
                    let currentAddonPlatform = Object.keys(data[platform]);

                    let currentAddonCat = Object.values(data[platform]);

                    // console.log("currentAddonPlatform:" + currentAddonPlatform);

                    for (var addons in currentAddonCat)
                    {
                        let currentPlatformAddon = currentAddonCat[addons];

                        for (var i in currentPlatformAddon)
                        {
                            let currentAddon = currentPlatformAddon[i];
                            let currentAddonString = JSON.stringify(currentAddon);
                
                            console.log('currentAddon: ' + currentAddon);
                            console.log('currentAddonString: ' + currentAddonString);

                            let addonName = currentAddon.addonName;
                            let addonTitle = currentAddon.addonTitle;

                            let browserIcon = currentAddon.iconURL;

                            // let chromeURL = currentAddon.addonURL.chromeURL;
                            // let firefoxURL = currentAddon.addonURL.firefoxURL;

                            // Boolean? ... seems logical 
                            // let ffQuantumSupport = currentAddon.moreInfo.forFFQuantum;

                            // let developer = currentAddon.moreInfo.developer;

                            const browserAddonOutput = `

                            <div class="card">
                                <div class="card-header">
                                    <div class="row text-white">
                                        <div class="col-auto">
                                            <img src=\"${addonIconDir}${browserIcon}\" alt=\"foobar alt tag\" class=\"iconLG\" />
                                        </div>
                                        <div class="col-auto">
                                            <a href="" target="_blank">
                                                ${addonTitle}
                                            </a>
                                        </div>
                                        <div class="col-auto float-right">
                                            <a href="" target="_blank">
                                                <i class="fab fa-chrome fa-3x"></i>
                                            </a>

                                            <a href="" target="_blank">
                                            <i class="fab fa-firefox fa-3x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>description here, perhaps</div>

                                </div>
                            </div>
                            `;

                            // Main output
                            browserResults.insertAdjacentHTML("afterbegin", browserAddonOutput);

                        }

                    }

                }

            }); // Ends .each loop

        }); // ends getJSON loop


    });

}