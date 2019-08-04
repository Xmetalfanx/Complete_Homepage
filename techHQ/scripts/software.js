// Version 2.0
let softwareOutput = document.getElementById ('softwareSection');

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function softwareData(data) {
  $(document).ready(function () {
    const softwareJSONUrl = 'http://xmetal.x10.mx/techHQ/json/software.json';

    // Get JSON Data
    // note: this IS jquery and if Bootstrap 5 removes the need for Jquery, i may remove it too ... i'd need another way at that point
    $.getJSON (softwareJSONUrl, function (data) {

      // pick better var than "i", later
      for (let i in data) {

        let mainCategories = Object.keys(data);

        let subCategoriesList = Object.values(data);

        // console.log("mainCategories: " + mainCategories);

        // Shows: main Cats in a list
        // softwareOutput.insertAdjacentHTML("beforeend","<div class=\"mb-2 font-weight-bold\">" + mainCategories + "</div>");

        // *** Var names are an issue ... they are confusing as hell the way I have it here

          for(let items in subCategoriesList){

            let subCatList = subCategoriesList[items];

            for(let eachSubCat in subCatList){

              let eachApp = subCatList[eachSubCat];
              let appString = JSON.stringify(eachApp);

              console.log("eachSubCat: " + eachSubCat);
              //console.log("appString: " + appString);

              for(let apps in eachApp){

                let appTitle = eachApp[apps].progTitle;
                console.log("appTitle:" + appTitle);

                // console.log("eachApp[apps]: " + JSON.stringify(eachApp[apps]));
              }

              // What is happening: this is (note "blink" is first) doing a "as long as there are characters in the word 'blink', loop through ... that is not the loop i want 

              softwareOutput.insertAdjacentHTML("beforeend", "<div class=\"text-primary\">" + eachSubCat + "</div>");

            }
          }
          break;

        }


    }); // ends getJSON loop
  });
}