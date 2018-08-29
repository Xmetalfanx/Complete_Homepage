// var for where to put the output
var desktopResults = document.getElementById("desktopSection");


// Testing new way of going through each DE framework section and then displaying EVERYTHING (for now)
function newLoopTest(data) {

    // data = the complete JSON 
    
    $.each(data, function(key){
        
        // Output for testing only 
        document.write("<br /><hr />" + key);

        var currentFramework = key; 

        console.log(currentFramework);

        // think of better var, later
        for (stuff in currentFramework)
        {
            document.write("<br />Hello");
        }


        const fwOutput = `
            
        Desktop Name: 
        <bold>
        ${key.desktopName}
        </bold>
        
        <br />
        Homepage:<a href="${key.desktopHomepage}" target="_blank"> ${key.desktopName}'s Homepage 
        </a>
        
        <br />

        Github URL: <a href="${key.desktopGithubURL}" target="_blank"> ${key.desktopName} on Github 
        
        </a>
        <br />

        <hr />
        `;



    })
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