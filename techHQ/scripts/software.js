let softwareOutput = document.getElementById('softwareSection');

const wineIcon =
  '<img src="/techHQ/platforms/wine.svg " alt="Wine Icon" style="' +
  '"/> Works on W.I.N.E.';

////////////////////////////////////////////////////////////////////
// "main" function

function softwareData(data) {
  $(document).ready(function () {
    const softwareJSONUrl = '/techHQ/json/software.json';

    // Get JSON Data
    // note: this IS jquery and if Bootstrap 5 removes the need for Jquery, i may remove it too ... i'd need another way at that point

    $.getJSON(softwareJSONUrl, function (data) {
      // pick better var than "i", later
      for (let i in data) {
        // Clear Var
        const progPlatform = '';

        // Cant remember what this Object.keys is for
        const mainCategories = Object.keys(data);
        const subCategoriesList = Object.values(data);

        for (let items in subCategoriesList) {
          const subCatList = subCategoriesList[items];

          console.log(subCatList);

          for (let eachSubCat in subCatList) {
            // eachSubCat shows the subcategories but INCLUDES the double quotes on both sides

            // Shows all the main categories, separated by a comma
            //softwareOutput.insertAdjacentHTML('beforeend', mainCategories);

            // Subcategories with the double-quotes on both sides removed
            const noQuoteSubCat = eachSubCat.replace(/['"]+/g, '');
            const eachApp = subCatList[eachSubCat];
            // console.log("eachApp: " + eachApp);

            for (let apps in eachApp) {
              if (localSubCat == noQuoteSubCat) {
                // NEWEST IDEA:
                const currentCategory = mainCategories;

                console.log('currentCategory: ' + currentCategory);

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
                // TODO: change this to the svg over fork awesome
                const linuxIcon =
                  '<img src="/graphics/simpleIcons/darkBG/linux.svg" alt="Linux Icon SVG" class="icon--size32" />';
                const windowsIcon =
                  '<img src="/graphics/simpleIcons/darkBG/windows.svg" alt="Windows Icon SVG" class="icon--size32"  />';

                const cpIcon = linuxIcon + windowsIcon;

                if (platform == 'w') {
                  platformIcon = windowsIcon;
                } else if (platform == 'l') {
                  platformIcon = linuxIcon;
                } else if (platform == 'cp') {
                  platformIcon = cpIcon;
                }

                const platformDisplay =
                  '<span class="d-none d-md-inline-block pr-3">Platform:</span>' +
                  platformIcon;

                // End Platform SECTION
                //////////////////////////////////////////////

                const headerDisplay = `
                    <div class=\"card softwareCard\">
                      <div class=\"card__header--wide\">
                        <div class=\"program-title\">
                            <img data-src=\"${progIcon}\" alt=\"${progTitle} alt tag\" class=\"icon--size40 lazyload \" \>
                            <a href=\"${homepage}\" target="_blank" rel="noreferrer">
                            ${progTitle}
                            </a>
                        </div>
                        <div class=\"platform\">
                          ${platformDisplay}
                        </div>
                    </div>
                    `;

                const screenshotDisplay = `<img src="${screenshot}" alt="${progName} screenshot" />`;
                ////////////////////////////////////////////////////////////////////////////////////////////////
                // Displaying
                softwareOutput.insertAdjacentHTML(
                  'beforeend',
                  headerDisplay +
                    '<div class="card__body">' +
                    description +
                    '<br />'
                );
                // I think this is so it only shows the wine graphic IF IT works on wine
                if (worksOnWine == true) {
                  softwareOutput.insertAdjacentHTML('beforeend', wineIcon);
                } else if (worksOnWine == false) {
                  console.log("no WINE info/doesn't work on wine");
                }

                softwareOutput.insertAdjacentHTML('beforeend', '</div>');
              }
            }
          }
        }
        break;
      }
    }); // ends getJSON loop
  });
}
