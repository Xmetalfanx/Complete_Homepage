// Reference: http://www.developphp.com/video/JavaScript/External-JSON-Data-File-Call-In-Using-Ajax-Tutorial

// Reference 2: https://www.youtube.com/watch?v=rJesac0_Ftw&t=963s


var desktopResults = document.getElementById("desktopSection");


// This should show the entire JSON file's info
function entireJSONFile(data){

  // New Idea reference URL: https://wesbos.com/template-strings-html/

  // Should loop through the JSON file
  for (var i = 0; i < data.length; i++){

      // using ` for this are called "Template Literals"
      const themeOutput =

        `
        <div>
          <strong>Desktop Name: 
          ${data[i].name} </strong> <br />

          Theme Homepage: ${data[i].homepage} <br />
          Theme Framework: ${data[i].framework} <br />
          <br  />
       
          Github URL: <a href="${data[i].github} " target="_blank" > 
            ${data[i].name} on Github </a> <br />

              
        </div> 
        <hr />
        `;
        
        desktopResults.insertAdjacentHTML("beforebegin", themeOutput);
  }
}

function specificDesktops(data){

  // This is a test and this var would be in the individual DE files 
  let localdename = "Cinnamon"

  // ?? not sure if this is still true or a leftover comment ... =  New Idea reference URL: https://wesbos.com/template-strings-html/

  // where the heck is data being looped through? ... should there be a while loop (below) IN a for loop 
  // WHAT I AM TRYING TO DO: ${data[i].name}.... should have a better name in JSON than "name" but ... anyway .... 
  
  
  // That var is the current (? terminology) element in the array .... localdename (should it be $localdename??) is set one the individual page that calls these scripts .... so if say localdename is set to "cinnamon"... the loop i want will cycle through the until it finds the object (I know my terms are off atm) with "desktopname" being say "cinnamon" and displays the info from that object  

  while (${data[i].name} === localdename)
  {

      // using ` for this are called "Template Literals"
      const themeOutput =

        `
        <div>
          <strong>Desktop Name: 
          ${data[i].name} </strong> <br />

          Theme Homepage: ${data[i].homepage} <br />
          Theme Framework: ${data[i].framework} <br />
          <br  />
       
          Github URL: <a href=" ${data[i].github} " target="_blank" > 
            ${data[i].name} on Github </a> <br />

              
        </div> 
        <hr />
        `;
        
        desktopResults.insertAdjacentHTML("beforebegin", themeOutput);
  } 

}

function ajaxGetJson(){

    // Create new XMLHttpRequest and assign it to a variable
    var desktopRequest = new XMLHttpRequest();

    // Get the JSON info located in the file at the URL specified
    desktopRequest.open("GET", "http://xmetal.x10.mx/linuxHQ/json/desktops.json", true);

    desktopRequest.onload = function() {
    var desktopData = JSON.parse(desktopRequest.responseText);

        // Call to function above to show entire JSON file
        // entireJSONFile(desktopData);

        specificDesktops();

		}

		desktopRequest.send();
	}
