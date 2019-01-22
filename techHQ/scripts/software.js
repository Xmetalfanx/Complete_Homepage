var softwareOutput = document.getElementById("softwareSection");
var jsTestVar = '<?php echo phpTestVar ?>';

function displayDEOutput(phpTestVar) {
    
    // Main output
    softwareOutput.insertAdjacentHTML("afterbegin", jsTestVar);

}

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function softwareData(data) {

    $(document).ready(function() {
        // Things DO GET HERE, successfully 
        console.log("Inside softwareData function in JS");

        // Pass to function -Testing for now 
        displayDEOutput(phpTestVar);

        var softwareJSONUrl = "http://xmetal.x10.mx/techHQ/json/software.json";

        // Get JSON Data
        $.getJSON(softwareJSONUrl, function(data) {

<<<<<<< HEAD

            // For each key value - in this case mainCatagory 
=======
            console.log("Data: " + data);

            // For each key value - in this case mainCatagory 

>>>>>>> 7cfcad70... TechHQ Software Section work
            $.each(data, function(key, value) {

                // The key is the main catagory 
                var mainCatagory = key;

                // The value is the sub-catagory 
                console.log("Main Catagories: " + mainCatagory);

                // Code for subCatagory sorting needed i think 

<<<<<<< HEAD
=======

>>>>>>> 4a19fa05... TechHQ Software Section work and testing
            }); // Ends .each loop 

        }); // ends getJSON loop


    });

}