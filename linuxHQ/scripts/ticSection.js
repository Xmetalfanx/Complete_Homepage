var ticResults = document.getElementById("TICSection");

// This should show the entire JSON file's info
function displayTICOutput(currentThemeName, currentSupportInfo, currentGnomelookURL, currentGithubURL, currentDeviantArtURL){

  // Should loop through the JSON file

      const themeOutput =

        `
        <div>
          <strong>Theme Name:${currentThemeName} </strong> <br />

          Theme has support for: ${currentSupportInfo} <br />

          <br  />
          Gnomelook URL: <a href="${currentGnomelookURL}" target="_blank" >
            ${currentThemeName} on Gnome Look </a> <br />

          Github URL: <a href="${currentGithubURL} " target="_blank" >
            ${currentThemeName} on Github </a> <br />

          Deviant Art URL: <a href="${currentDeviantArtURL}" target="_blank" >
            ${currentThemeName} on DeviantArt </a>

        </div>
        <hr />
        `;

        // ** NO if statement here 
        themeResults.insertAdjacentHTML("beforebegin", themeOutput);
  }


function getTICData() {

  $(document).ready(function()
  {

    ticJSONURL = "http://xmetal.x10.mx/linuxHQ/json/tic.json";

    $.getJSON(ticJSONURL, function(data) {

      $.each(data, function(key, value) {

        // The key is "themes" or "icons" or "cursors"

        var currentSubTheme = key;

        // Not sure what to call them atm ... they were "subFrameworks in the DE framework type" part so i will just use "subThemes"
        for (var subTheme = 0; subTheme < value.length; subTheme++){

          var currentThemeName = value[subTheme].themeName;
          var currentSupportInfo = value[subTheme].supportInfo;
          
          // Links
          var currentDeviantArtURL = value[subTheme].links.devartsURL
          var currentGithubURL = value[subTheme].links.githubURL
          var currentGnomelookURL = value[subTheme].links.gnomelooksURL


        } // Ends for-loop

        if (localTICName == currentThemeName)
        {
          displayTICOutput(currentThemeName, currentSupportInfo, currentGnomelookURL, currentGithubURL, currentDeviantArtURL)

        }

      }); // Ends .each loop 

    });  // Ends getJSON loop

  });
    
}
