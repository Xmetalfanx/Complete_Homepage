// var for where to put the output
var desktopResults = document.getElementById("desktopSection");

// Output test 
function outputTest(key) {

    // Output for testing only
    document.write("<br /><hr />" + key);

}


// Testing new way of going through each DE framework section and then displaying EVERYTHING (for now)
function newLoopTest(data) {

    // data = the complete JSON 
    
    $.each(data, function(key){

        // The key is 'gtk2' or 'qt'

        currentFramework = key;
        
        // Seperate function for testing the output 
        // outputTest(key)


        console.log("This:");
        console.log(this);
        
        console.log("Current Framework:");
        console.log(currentFramework);

    });
}

// "main" function
function getDesktopData(desktopData) {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/desktops.json";

    // Get JSON Data
    $.getJSON(jsonURL, function (data) {

        // JSONLayoutTest(data);
        // specificDETEstFunction(data);

        newLoopTest(data);

    }); // ends getJSON loop
}