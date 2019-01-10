var screenshotResults = document.getElementById('desktopSection');

/*
function displayDEOutput() {

    // Template Literal for output

    // Main output
    screenshotResults.insertAdjacentHTML("beforeend", deInfoCard);

}
*/


////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function softwareData(data) {

    $(document).ready(function() {
        // Things DO GET HERE, successfully 
        console.log("Inside softwareData function in JS");

        softwareJSONUrl = "http://xmetal.x10.mx/techHQ/json/software.json";

        // Get JSON Data
        $.getJSON(softwareJSONUrl, function(data) {

            console.log("Data: " + data);

            // For each key value - in this case mainCatagory 

            $.each(data, function(key, value) {

                // The key is the main catagory 
                var mainCatagory = key;

                // I think this should be right 
                // The value is the sub-catagory 
                console.log("Main Catagories: " + mainCatagory);

                // Code for subCatagory sorting needed i think 

            }); // Ends .each loop 

        }); // ends getJSON loop


    });

}