// Reference: http://www.developphp.com/video/JavaScript/External-JSON-Data-File-Call-In-Using-Ajax-Tutorial
// Reference 2: https://www.youtube.com/watch?v=rJesac0_Ftw&t=963s
// Note to self: these may be old reference links, above 


// var for where to put the output
var desktopResults = document.getElementById("desktopSection");

function newJSONLayoutTest(data) {

    var frameworkTest = data.framework
    
    console.log(frameworkTest);

    // document.write(frameworkTest);

    // This seems to cycle through the frameworks fine
    for (x in frameworkTest){
        var i = 0;
        document.write(i);
        i++;
    }
    
}


// "main" function
function getDesktopData(desktopData) {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/desktops.json";

    // Get JSON Data
    $.getJSON("http://xmetal.x10.mx/linuxHQ/json/desktops.json", function(data) {

        newJSONLayoutTest(data);

    }); // ends getJSON loop

}