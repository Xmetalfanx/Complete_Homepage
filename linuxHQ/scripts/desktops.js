// Reference: http://www.developphp.com/video/JavaScript/External-JSON-Data-File-Call-In-Using-Ajax-Tutorial
// Reference 2: https://www.youtube.com/watch?v=rJesac0_Ftw&t=963s


// var for where to put the output
var desktopResults = document.getElementById("desktopSection");

// looks for specific info 
function specificDEInfo(data)
{

  // Test ... this var would be located in each specific page 
  localDEName = "Cinnamon";

  $.each(data, function (key,value){

    var desktopOutput = `

    Desktop Name: ${this.desktopName} 
    <br />
    
    Framework: ${this.desktopFramework} 
    <br /> 

    Homepage: 
    <a href="${this.desktopHomepage}" target="_blank"> 
    ${this.desktopName} Homepage </a> 
    <br /> 

    Github URL: <a href="${this.desktopGithubURL}" target="_blank"
    > 

    ${this.desktopName} on Github </a>
    <br /><hr /> 

    `;


    if (this.desktopName == localDEName) {

      desktopResults.insertAdjacentHTML("afterbegin", desktopOutput); 

    } // Ends if loop

  }) // Ends .each loop
}


// "main" function
function getDesktopData(desktopData) {

  // Get JSON Data 
  $.getJSON("http://xmetal.x10.mx/linuxHQ/json/desktops.json", function (data) {


  // Testing getting specific info 
  specificDEInfo(data);

  }); // ends getJSON loop

}
