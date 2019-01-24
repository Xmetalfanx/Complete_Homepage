var softwareOutput = document.getElementById("softwareSection");
var jsTestVar = '<?php echo phpTestVar ?>';

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function softwareData(data) {

    $(document).ready(function() {

        // console.log("Inside softwareData function in JS");

        const softwareJSONUrl = "http://xmetal.x10.mx/techHQ/json/software.json";
        var mainCatNum = 0;

        // Get JSON Data
        $.getJSON(softwareJSONUrl, function(data) {

            // For each key value - in this case mainCatagory
            $.each(data, function(key, value) {

                const mainCatagory = key;

                // test var
                var jsonStringifyMainCat = JSON.stringify(mainCatagory);

                mainCatNum++;

                // For testing only
                console.log("mainCatagory: " + mainCatagory);
                // console.log(this);


                for (subCatagories in this){

                    console.log("Subcatagory: " + subCatagories);
                    // console.log("this: " + JSON.stringify(this));

                    // come up with better var name later 
                    for (stuff in subCatagories)
                    {
                        for (moreThings in stuff)
                        {
                            console.log("hmm: " + stuff[moreThings]);


                        }

                    }

                }

            }); // Ends .each loop

        }); // ends getJSON loop

    });

}
