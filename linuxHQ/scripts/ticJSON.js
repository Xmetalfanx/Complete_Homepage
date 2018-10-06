function renderHTML(data){

var themeResults = document.getElementById("ticSection");
}

// This should show the entire JSON file's info
function entireJSONFile(data){


  // Should loop through the JSON file
  for (var i = 0; i < data.length; i++){

      // using ` for this are called "Template Literals"
      const themeOutput =

        `
        <div>
          <strong>Theme Name:
          ${data[i].name} </strong> <br />

          Version: ${data[i].version} <br />

          Theme has support for: ${data[i].supportInfo} <br />

          <br  />
          Gnomelook URL: <a href="${data[i].gnomelook}" target="_blank" >
            ${data[i].name} on Gnome Look </a> <br />

          Github URL: <a href="${data[i].github} " target="_blank" >
            ${data[i].name} on Github </a> <br />

          Deviant Art URL: <a href="${data[i].devarts}" target="_blank" >
            ${data[i].deviantArtURL} on DeviantArt </a>

        </div>
        <hr />
        `;

        themeResults.insertAdjacentHTML("beforebegin", themeOutput);
  }
}


function ajaxGetJson(){

    // Create new XMLHttpRequest and assign it to a variable
    var themeRequest = new XMLHttpRequest();

    // Get the JSON info located in the file at the URL specified
    themeRequest.open("GET", "http://xmetal.x10.mx/linuxHQ/json/themes.json", true);

    themeRequest.onload = function() {
    var themeData = JSON.parse(themeRequest.responseText);

        // Call to function above to show entire JSON file
        entireJSONFile(themeData);

        specificJSONEntry(themeData);


		}

		themeRequest.send();
	}
