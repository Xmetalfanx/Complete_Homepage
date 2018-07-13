// Reference: http://www.developphp.com/video/JavaScript/External-JSON-Data-File-Call-In-Using-Ajax-Tutorial
// Reference 2: https://www.youtube.com/watch?v=rJesac0_Ftw&t=963s


// var for where to put the output
var desktopResults = document.getElementById("desktopSection");


function entireJSONFile(desktopData){

  // Should cycle through, and display the HTML to the desktopResults 
  desktopResults.insertAdjacentHTML("beforebegin", themeOutput);
   
}


/*

// My attempt that when done will only display specific information for certain desktops and NOT the entire JSON file
function specificDesktops(data){

  // This is a test and this var would be in the individual DE files, not here
  let localdename = 'cinnamon';

    // Loop 1 - Cycles through the JSON file, as long as there is content
    for (var i = 0; i < desktopData.length; i++){

      // if the desktopName in the json object is equal to the localdename content,
      // then do the content inside the loop
      while (desktopNameCheck === localdename){

        // var idea for nested loop
        // inside of this loop, this should only run once 
        let desktopNameCheck = data[i].desktopName;

        // for testing only
        console.log(desktopNameCheck);

          // using ` for this are called "Template Literals"
          const desktopOutput =
            `
            <div>
              <strong>Desktop Name: ${data[i].name} </strong> <br />

              Theme Homepage: ${data[i].homepage} <br />
              Theme Framework: ${data[i].framework} <br />
              <br  />

              Github URL: <a href=" ${data[i].github} " target="_blank" > ${data[i].name} on Github </a> <br />

            </div>
            <hr />
            `;

            desktopResults.insertAdjacentHTML("beforebegin", desktopOutput);
          }
        }
      }

*/



// "main" function
function getDesktopData(desktopData)
{

  $.getJSON('http://xmetal.x10.mx/linuxHQ/json/desktops.json', function (results){
  
   // Moved themeOutput here since it shouldn't be redone EACH time the loop goes through 
        // using ` for this are called "Template Literals"
        // why const and not var here? ... there COULD be a good reason 
      const themeOutput =

        `
        <div>
          <strong>Desktop Name:
          ${distroName} </strong> <br />

          Theme Homepage: ${homepage} <br />
          Theme Framework: ${framework} <br />
          <br  />

          Github URL: <a href="${github} " target="_blank" >
            ${distroName} on Github </a> <br />

        </div>
        <hr />
        `;


        // Loop through JSON file, as long as there is more data 
        $.each(result, function(i, field){
          console.log(JSON.parse(results));
        }

  });

}
