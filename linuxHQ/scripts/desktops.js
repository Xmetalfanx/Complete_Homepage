let desktopResults = document.getElementById("desktopSection");
let screenshotDIR = "/linuxHQ/screenshots/";

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function getDesktopData(data, $localDEName)
{

    fetch("http://xmetal.x10.mx/linuxHQ/json/desktops.json")

    .then(function(response) {
        return response.json();
    })

    .then(function(desktopJSON){

        data=JSON.stringify(desktopJSON);
        console.log(data);
        
        currentDesktop=desktopJSON;
        console.log(currentDesktop);
    });

}
