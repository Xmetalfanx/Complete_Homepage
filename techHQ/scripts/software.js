let softwareOutput = document.getElementById ('softwareSection');
let smallIcon = 'height: 32px; width: 32px';
let largeIcon = 'height: 48px; width: 48px';

const wineIcon = '<img src="/techHQ/platforms/wine.svg " alt="Wine Icon" style="' + smallIcon + '"/> Works on W.I.N.E.';

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function softwareData (data) {
  $ (document).ready (function () {
    const softwareJSONUrl = '/techHQ/json/software.json';

    // Get JSON Data
    // note: this IS jquery and if Bootstrap 5 removes the need for Jquery, i may remove it too ... i'd need another way at that point
    $.getJSON (softwareJSONUrl, function (data) {
      // pick better var than "i", later
      for (let i in data) {

        // Clear Var
        const progPlatform = '';

        // Cant remember what this Object.keys is for
        const mainCategories = Object.keys(data);
        const subCategoriesList = Object.values(data);

        for (let items in subCategoriesList) {

          // Just displays numbers 
          //console.log("items: " + items);
          //console.log("items2: " + JSON.stringify(items));

          const subCatList = subCategoriesList[items];

          console.log(subCatList);

          for (let eachSubCat in subCatList) {

            // eachSubCat shows the subcategories but INCLUDES the double quotes on both sides 

            // Shows all the main categories, separated by a comma 
            softwareOutput.insertAdjacentHTML('beforeend', mainCategories);


            // Subcategories with the double-quotes on both sides removed
            const noQuoteSubCat = eachSubCat.replace(/['"]+/g, '');
            const eachApp = subCatList[eachSubCat];
            // console.log("eachApp: " + eachApp);

            for (let apps in eachApp) {

              if (localSubCat == noQuoteSubCat)
              {

                // NEWEST IDEA: 
                const currentCategory = mainCategories;

                console.log("currentCategory: " + currentCategory);
                
                const individualApps = eachApp[apps];
                const moreInfo = individualApps.moreInfo;

                const progTitle = individualApps.progTitle;
                const progName = individualApps.progName;

                const progIcon = individualApps.images.icon;
                const screenshot = individualApps.images.sshotURL;

                const description = moreInfo.progDesc;
                const homepage = moreInfo.progHomepage;
                const platform = moreInfo.progPlatform;
                const worksOnWine = moreInfo.worksonwine;

                // The status of the program.  This will be used sometimes when a program is discontinued
                const progStatus = moreInfo.progStatus;

                /////////////////////////////////////////////

                // Platform Section
                const linuxIcon = '<i class="fa fa-linux" aria-hidden="true"></i>';
                const windowsIcon = '<i class="fa fa-windows" aria-hidden="true"></i>';

                const cpIcon = linuxIcon + windowsIcon;

                if (platform == "w"){
                      platformIcon = windowsIcon;

                } else if (platform == "l") {
                      platformIcon = linuxIcon;

                } else if (platform == "cp") {
                      platformIcon = cpIcon;
                }

                // Text-primary = blue color
                const platformDisplay = '<div> Platform:' + platformIcon + '</div>';

                // End Platform SECTION
                //////////////////////////////////////////////

                const headerDisplay = `
                 <div class=\"card card-border border-dark shadow\">
                  <div class=\"card-header text-white py-1 col-12\">
                    <div class=\"row py-2\">
                      <div class=\"col-7\">
                        <img data-src=\"${progIcon}\" alt=\"foobar alt tag\" style=\"${smallIcon}\" class=\"lazyload \" \>
                        <a href=\"${homepage}\" target="_blank" rel="noreferrer">
                          ${progTitle}
                        </a>
                      </div>
                      <div class=\"col-5\">
                        ${platformDisplay}
                      </div>
                    </div>
                  </div>
                  `;

                const screenshotDisplay = `<img src="${screenshot}" alt="${progName} screenshot" />`;


                ////////////////////////////////////////////////////////////////////////////////////////////////
                // Displaying
                softwareOutput.insertAdjacentHTML (
                  'beforeend',
                  '<div class="mr-3 my-3">' + headerDisplay + '<div class="card-text">' + description + '<br />');


                if(worksOnWine == true)
                  {
                    softwareOutput.insertAdjacentHTML('beforeend', wineIcon);
                  } else(worksOnWine == false)
                  {
                    console.log("no WINE info/doesn't work on wine");
                  }

                softwareOutput.insertAdjacentHTML (
                  'beforeend', '</div></div>');

              }
            }
          }
        }
        break;
      }

    }); // ends getJSON loop
  });
}
