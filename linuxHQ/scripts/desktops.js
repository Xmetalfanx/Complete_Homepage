// var for where to put the output
var desktopResults = document.getElementById("desktopSection");


// Testing new way of going through each DE framework section and then displaying EVERYTHING (for now)
function newLoopTest(data) {

    // data = the complete JSON 
    
    $.each(data, function(key){
        
        document.write(key);
        document.write("<hr />");

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