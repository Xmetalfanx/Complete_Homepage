let browserResults = document.getElementById('browserSection');
let browserIconDir = '/techHQ/progIcons/internet/browsers/';
let addonIconDir = '/techHQ/browsers/addons/graphics/';

// for Icons
let firefoxIcon = 'firefox.svg';
let chromeIcon = 'chrome.svg';

////////////////////////////////////////////////////////////////////
// "main" function

function browserAddonData(data) {
	$(document).ready(function() {
		// "Things DO GET HERE, successfully"
		// console.log("Inside softwareData function in JS");

		browserAddonsJSONUrl = '/techHQ/json/browserAddons.json';

		// Get JSON Data
		$.getJSON(browserAddonsJSONUrl, function(data) {

            $.each(data, function(key, value) {
                
                // Chrome Firefox Both
				let allPlatforms = Object.keys(data);
				//console.log("allPlatforms: " + allPlatforms);

                // Everything in a platform, including catagories, in (I think) JSON format

                let AllCats = Object.values(data);
                //console.log("AllCats: " + AllCats);

				AllCats.forEach(catagories);

				function catagories(item, index) {
                    
                    // everything including the  catagory 
                    //let itemString = JSON.stringify(item);
                    //console.log("itemString: " + itemString);


                    let eachCatagory = Object.keys(item);

                    // shows all the addons
                    let allPlatAddons = Object.values(item);
                    // console.log(allPlatAddons);

                    allPlatAddons.forEach(cyclePlatformAddons);

                    function cyclePlatformAddons(eachCatsAddons, index)
                    {
                        
                        console.log(eachCatsAddons);

                        eachCatsAddons.forEach(cycleCatagoryAddons);


                        function cycleCatagoryAddons(item, index){

                        let eachAddon = item; 

                        let addonTitle = eachAddon.addonTitle;
                        let addonName = eachAddon.addonName;

                        let addonIcon = eachAddon.iconURL;

                        //
                        // Meta vars
                        let moreInfo = eachAddon.moreInfo;
                        // AddonURLs
                        // note to self: maybe make the URL, URLs, later ... whatever
                        let addonURLs = eachAddon.addonURL;
                        // End of Meta Vars

                        // More Info
                        let addonDev = moreInfo.developer;
                        // for Firefox 57+
                        let addonFFQuat = moreInfo.forFFQuantum;

                        let chromeURL = addonURLs.chromeURL;
                        let firefoxURL = addonURLs.firefoxURL;

                        const browserOutput = `
                        
                            <div class="card shadow my-3">
                                <div class="card-header"> 
                                    <div class="row"> 
                                        <div class="col-auto">
                                            <img src=\"${addonIconDir}${addonIcon}\" alt=\"${addonTitle} icon \"  class="iconSM"/>
                                        </div>
                                        <div class="col-auto">${addonTitle}</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>description here, perhaps</div>
                                    <div class="row py-3">
                                        <div class="col">
                                            <a href="${chromeURL}" target="_blank">
                                                <img src=\"${browserIconDir}${chromeIcon}\" alt=\"${addonTitle} Chrome icon\" class=\" iconLG\" />
                                            
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="${firefoxURL}" target="_blank">
                                            <img src=\"${browserIconDir}${firefoxIcon}\" alt=\"${addonTitle} Firefox icon\" class=\" iconLG\" />
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        `;
                        
                        // Main output
                        browserResults.insertAdjacentHTML('afterbegin', browserOutput);

                        }
                    }
				}
			}); // Ends .each loop
		}); // ends getJSON loop
	});
}
