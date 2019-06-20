let browserResults = document.getElementById("browserSection");
let browserIcontDir = "/techHQ/progIcons/internet/browsers/";

// for Icons
let firefoxIcon = "${$browserIconDir}/icon8-firefox.svg";
let chromeIcon =  "${$browserIconDir}/icon8-chrome.svg";


function browserAddonDisplay() {

    const browserOutput = `
    
        <div class="card">
            <div class="card-header"> 
                <div class="row"> 
                    <div class="col-2">${browserIcon}</div>
                    <div class="col-auto">${browserAddonTitle}</div>
                </div>
            </div>
            <div class="card-body">
                <div>description here, perhaps</div>
                <div class="row">
                    <div class="col">
                        <a href="${chromeURL}" target="_blank">${chromeIcon}</a>
                    </div>
                    <div class="col">
                        <a href="${chromeURL}" target="_blank">${firefoxIcon}</a>
                        </div>
                </div>
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

        browserAddonsJSONUrl = "http://xmetal.x10.mx/techHQ/json/browserAddons.json";

        // Get JSON Data
        $.getJSON(browserAddonsJSONUrl, function(data) {

            // For each key value - in this case mainCatagory
            $.each(data, function(key, value) {

                // Chrome? Firefox? Both? 
                let currentAddonPlatform = key;

                let currentAddonCatagory = value;
                console.log(currentAddonCatagory);
                
                for (let addonPlatform = 0; addonPlatform < value.length; addonPlatform++) {

                    let browserAddonName = value[addonPlatform].addonName;
                    let browserAddonTitle = value[addonPlatform].addonTitle;

                    let developer = value[addonPlatform].moreInfo.developer;
                    let browserIcon = value[addonPlatform].iconURL;

                    let chromeURL = value[addonPlatform].addonURL.chromeURL;
                    let firefoxURL = value[addonPlatform].addonURL.firefoxURL;


                    // for Firefox

                    // Boolean? ... seems logical 
                    let ffQuantumSupport = value[addonPlatform].moreInfo.forFFQuantum;


                    // in LinuxHQ JS files the call to display function us usually here
                    browserAddonOutput();
                }

            }); // Ends .each loop

        }); // ends getJSON loop


    });

}