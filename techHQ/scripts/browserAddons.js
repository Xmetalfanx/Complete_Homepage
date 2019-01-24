var browserResults = document.getElementById("browserSection");
var browserIcontDir = "/techHQ/progIcons/internet/browsers/";

// for Icons
var firefoxIcon = "${$browserIconDir}/icon8-firefox.svg";
var chromeIcon =  "${$browserIconDir}/icon8-chrome.svg";


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
                var currentAddonPlatform = key;

                var currentAddonCatagory = value;
                console.log(currentAddonCatagory);
                
                for (var addonPlatform = 0; addonPlatform < value.length; addonPlatform++) {

                    var browserAddonName = value[addonPlatform].addonName;
                    var browserAddonTitle = value[addonPlatform].addonTitle;

                    var developer = value[addonPlatform].moreInfo.developer;
                    var browserIcon = value[addonPlatform].iconURL;

                    var chromeURL = value[addonPlatform].addonURL.chromeURL;
                    var firefoxURL = value[addonPlatform].addonURL.firefoxURL;


                    // for Firefox

                    // Boolean? ... seems logical 
                    var ffQuantumSupport = value[addonPlatform].moreInfo.forFFQuantum;


                    // in LinuxHQ JS files the call to display function us usually here
                    browserAddonOutput();
                }

            }); // Ends .each loop

        }); // ends getJSON loop


    });

}