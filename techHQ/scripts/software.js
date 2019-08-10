// Version 2.0
let softwareOutput = document.getElementById ('softwareSection');

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
        let mainCategories = Object.keys (data);

        let subCategoriesList = Object.values (data);

        /* *** Var names are an issue ... they are confusing as hell the way I have it here */

        for (let items in subCategoriesList) {
          let subCatList = subCategoriesList[items];

          for (let eachSubCat in subCatList) {
            let eachApp = subCatList[eachSubCat];

            softwareOutput.insertAdjacentHTML (
              'beforeend',
              '<div class="text-primary">' + eachSubCat + '</div>'
            );

            for (let apps in eachApp) {
              const individualApps = eachApp[apps];
              const moreInfo = individualApps.moreInfo;

              let progTitle = individualApps.progTitle;
              let progName = individualApps.progName;

              let progIcon = individualApps.images.icon;
              let screenshot = individualApps.images.sshotURL;

              let description = moreInfo.progDesc;
              let homepage = moreInfo.progHomepage;
              let platform = moreInfo.progPlatform;
              let worksOnWine = moreInfo.worksonwine;

              const iconDisplay = `<img src=\"${progIcon}\" alt=\"foobar alt atm\" style=\"height: 32px; width; \" \>
                `;

              const titleDisplay = `
                <div class=\"card-header text-white py-1\"> ${iconDisplay} 
                  <a href=\"${homepage}\" target="_blank">
                  ${progTitle}
                  </a>
                </div>`;

              const wineDisplay = `
                <div class=\" \">Works on Wine: 
                  ${worksOnWine} 
                </div>
              `;


              switch (platform)
              {
                case 'w':
                    //console.log("Windows");

                    platformIcon = "Windows";
                    break;

                case 'l':
                    //console.log("Linux");
                    platformIcon = "Linux";
                    break;

                case 'cp': 
                  //console.log("Cross-platform");
                    platformIcon = "Cross-Platform";
                    break;

              }


              softwareOutput.insertAdjacentHTML (
                'beforeend',
                '<div class="card border border-dark mb-3">' + titleDisplay + '<div class="card-text">' + description + '<br />Platform:' + platformIcon +  '<br />' + wineDisplay +
                '</div></div>');

            }
          }
        }
        break;
      }
    }); // ends getJSON loop
  });
}
