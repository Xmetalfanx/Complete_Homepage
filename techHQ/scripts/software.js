var softwareOutput = document.getElementById("softwareSection");
var jsTestVar = '<?php echo phpTestVar ?>';

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function softwareData(data) {

    $(document).ready(function() {

        // console.log("Inside softwareData function in JS");

        const softwareJSONUrl = "http://xmetal.x10.mx/techHQ/json/software.json";

        // Get JSON Data
        $.getJSON(softwareJSONUrl, function(data) {

            // For each mainCategory in this case 
            $.each(data, function(key, value) {

                const mainCategory = key;

                // Test Var only ... can be removed later 
                // console.log(mainCategory + "" +  value);

                // As long as there are subcatagories in the mainCatagory, loop through 
                for (subCategories in value){

                    // Is this where the nunber counter (for loop) should come in? 
                    for(var sortedSubCatCount = 0; sortedSubCatCount < subCategories.length; sortedSubCatCount++ )
                    {
                        
                        // This is counting numbers ... 
                        console.log(subCategories[sortedSubCatCount]);

                    }
    
                }

            }); // Ends .each loop

        }); // ends getJSON loop

    });

}
