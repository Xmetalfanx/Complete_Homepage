// var for where to put the output
var desktopResults = document.getElementById("desktopSection");

// Testing new way of going through each DE framework section and then displaying EVERYTHING (for now)
function newLoopTest(data) {

    // data = the complete JSON

    // Outer loop 
    $.each(data, function(key, value) {

        // The key is 'gtk2' or 'qt'
        // the value is the framework's "sub-json" to so speak
        var currentFramework = key;

        // Future Idea: 
        // use these in the for loop below to cut down on the messy look of the code 
        var valueSF = "value[subFrameworks]";
        var removeQuotes = "replace(/\"/g, \"\" ";

        // DO NOT even try the var's above, until you (note to self...) KNOW what is below is working 


        // subFramework is for the number of the object in the individual Framework (? what term i mean here)
        // example - subframework ... (starting at 0 and not 1) would have 0, 1, and 2 for 
        for (var subFrameworks = 0; subFrameworks < value.length; subFrameworks++) {

            var currentDEName = (value[subFrameworks].desktopName).replace(/\"/g, "");

            var currentDEHomepage = (value[subFrameworks].desktopHomepage).replace(/\"/g, "");

            var currentDEGithub = (value[subFrameworks].desktopGithubURL).replace(/\"/g, "");

            // Stringified versions of the prior variables
            var currentDENameStr = JSON.stringify(currentDEName);
            var currentDEHomepageStr = JSON.stringify(currentDEHomepage);
            var currentDEGithubStr = JSON.stringify(currentDEGithub);



            // Template Literal for output
            const fwOutput = `
                
            Desktop Name: <bold>${currentDENameStr}</bold>
                    
            <br />
            Homepage:<a href="${currentDEHomepageStr}" target="_blank"> ${currentDENameStr}'s Homepage 
            </a>
                    
            <br />
            Github URL: <a href="${currentDEGithubStr}" target="_blank"> ${currentDENameStr} on Github 
                    
            </a>
            <br />
            <hr />
            `;

            // Display Output
            document.write(fwOutput);


        }




        // vars, to prevent "[undefined undefined]" displaying 
        var keyStr = JSON.stringify(key);
        var valueStr = JSON.stringify(value);

        // console.log("Key: " + keyStr);
        // console.log("Value: " + valueStr);

    });
}

// "main" function
function getDesktopData(desktopData) {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/desktops.json";

    // Get JSON Data
    $.getJSON(jsonURL, function(data) {


        newLoopTest(data);

    }); // ends getJSON loop
}