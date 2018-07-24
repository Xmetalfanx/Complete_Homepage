// Reference: http://www.developphp.com/video/JavaScript/External-JSON-Data-File-Call-In-Using-Ajax-Tutorial
// Reference 2: https://www.youtube.com/watch?v=rJesac0_Ftw&t=963s


// var for where to put the output
var desktopResults = document.getElementById("desktopSection");

function newJSONLayoutTest(data){

    /////////////////////////////////////////////////////////////////////////
    // Variables 

    // Idea to have these in vars to be used inside of the template literal var
    var currentDesktopName = '${this.desktopName}';
    var currentDesktopHP = "${this.desktopHomepage}";
    var currentDesktopFW = "${this.desktopFramework}";
    var currentDesktopGL = "${this.desktopGithubURL}";

    // idea: to say list only the "gtk3" DEs
    var localgtkversion = "gtk3";

    var desktopOutput = `

        Desktop Name: ${currentDesktopName}
        <br />

        Framework: ${currentDesktopFW}
        <br />

        Homepage:
        <a href="${currentDesktopHP}" target="_blank">
        ${currentDesktopName} Homepage </a>
        <br />

        Github URL: <a href="${currentDesktopGL}" target="_blank"
        >

        ${currentDesktopName} on Github </a>
        <br /><hr />

        `;

      //////////////////////////////////////////////////////////////


      // As long as there is data - outer loop
      $.each(data, function (key,value){

        // alert("Loop Entered ... console.log SHOULD have data")        

        if (data.hasOwnProperty(key))
        desktopResults.insertAdjacentHTML("afterbegin", $(".frameworks"));

        console.log($(".frameworks"));

      }) // Ends outer loop

}


// "main" function
function getDesktopData(desktopData) {

  // Get JSON Data
  $.getJSON("http://xmetal.x10.mx/linuxHQ/json/desktops.json", function (data) {

  newJSONLayoutTest(data);

  }); // ends getJSON loop

}
