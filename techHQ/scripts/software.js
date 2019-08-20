// Version 2.0
let softwareOutput = document.getElementById ('softwareSection');
let smallIcon = 'height: 32px; width: 32px';
let largeIcon = 'height: 48px; width: 48px';

const wineIcon = '<img src="/techHQ/platforms/wine.svg " alt="Wine Icon" style="' + smallIcon + '"/> Works on W.I.N.E.';

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function softwareData (data) {
  $ (document).ready (function () {
    const softwareJSONUrl = 'http://xmetal.x10.mx/techHQ/json/software.json';

    // Get JSON Data
    // note: this IS jquery and if Bootstrap 5 removes the need for Jquery, i may remove it too ... i'd need another way at that point
    $.getJSON (softwareJSONUrl, function (data) {
      // pick better var than "i", later
      for (let i in data) {
        
        // Idea of this is to reset ... sometimes I forgot to put this var in the json and if it's not cleared/reset, the next program listed will still have the same progPlatform value as the previous program 
        let progPlatform = '';
        
        let mainCategories = Object.keys (data);

        let subCategoriesList = Object.values (data);

        softwareOutput.insertAdjacentHTML('beforeend', mainCategories);

        /* *** Var names are an issue ... they are confusing as hell the way I have it here */

        for (let items in subCategoriesList) {
          let subCatList = subCategoriesList[items];

          for (let eachSubCat in subCatList) {
            let eachApp = subCatList[eachSubCat];

            // eachSubCat seems like the goal to have "localSubCat" in each webpage compared to 
            softwareOutput.insertAdjacentHTML (
              'beforeend',
              '<div class="text-primary">' + eachSubCat + '</div>'
            );

            for (let apps in eachApp) {
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
              let progStatus = moreInfo.progStatus;

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
              platformDisplay = '<div> Platform:' + platformIcon + '</div>';

              // End Platform SECTION
              //////////////////////////////////////////////

              const headerDisplay = `
                <div class=\"card-header text-white py-1 col-12\">
                  <div class=\"row py-2\">
                    <div class=\"col-7\">
                      <img src=\"${progIcon}\" alt=\"foobar alt tag\" style=\"${smallIcon}\" \>
                      <a href=\"${homepage}\" target="_blank" rel="noreferrer">
                        ${progTitle}
                      </a>
                    </div>
                    <div class=\"col-5\">
                      ${platformDisplay}
                    </div>
                  </div>
                </div>`;

              const screenshotDisplay = `<img src="${screenshot}" alt="${progName} screenshot" />`;


              softwareOutput.insertAdjacentHTML (
                'beforeend',
                '<div class="card border border-dark mr-3 my-3">' + headerDisplay + '<div class="card-text">' + description + '<br />');


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
        break;
      }

    }); // ends getJSON loop
  });
}
