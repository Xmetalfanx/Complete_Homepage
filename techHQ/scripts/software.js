// Version 1.0
let softwareOutput = document.getElementById ('softwareSection');
let jsTestlet = '<?php echo phpTestlet ?>';

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function softwareData (data) {
  $(document).ready(function () {
    const softwareJSONUrl = 'http://xmetal.x10.mx/techHQ/json/software.json';

    // Get JSON Data
    // note: this IS jquery and if Bootstrap 5 removes the need for Jquery, i may remove it too ... i'd need another way at that point
    $.getJSON (softwareJSONUrl, function (data) {

      // pick better var than "i", later
      for (let i in data) {

        // This gets the subcats in a list so to speak, separated by commas
        let mainCategories = Object.keys(data);
        let subCategories = Object.values(data);

        // console.log("mainCategories: " + mainCategories);

          for(let items in subCategories){

            let subCatList = subCategories[items];

            console.log(subCatList);

            for(let apps in subCatList){



            }
          }
          break;
    
        }

        // softwareOutput.insertAdjacentHTML("beforeend", "<div class=\"text-primary\">" + eachAppString + "</div>");

      // note to self: text-danger is just bootstrap4 red ... easier than inline CSS here for my testing
      // softwareOutput.insertAdjacentHTML("beforeend", "<div class=\"mb-2 font-weight-bold text-danger\">" + mainCategories +  "</div>");

    }); // ends getJSON loop
  });
}