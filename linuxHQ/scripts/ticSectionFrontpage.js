var ticResults = document.getElementById("TICSection");

// This should show the entire JSON file's info
function displayTICOutput(currentTICThemeName, currentTICThemeTitle, currentTICSupportInfo, currentTICGnomelookURL, currentTICGithubURL, currentTICDeviantArtURL, currentTICArch, currentTICFedora, currentTICOpenSuse, currentTICUbuntu){

  // Should loop through the JSON file

      const howToInstall = `
        How to install ${currentTICThemeName}
        <br />
        <br />
  
      `;

      const themeOutput =
        `
      
          <div class="card w-33"> 
            <div class="card-header bg-primary text-white font-weight-bold">${currentTICThemeTitle}</div>
            <div class="card-text"> 
                ${currentTICSupportInfo}
                <br/><br/>
          
          </div>
        
        `;

        // ** NO if statement here 
        ticResults.insertAdjacentHTML("beforebegin", themeOutput);
  }


function getTICData() {

  $(document).ready(function()
  {

    ticJSONURL = "http://xmetal.x10.mx/linuxHQ/json/tic.json";

    $.getJSON(ticJSONURL, function(data) {

      $.each(data, function(key, value) {

        // The key is "themes" or "icons" or "cursors"

        var currentSubTheme = key;

        for (var subTheme = 0; subTheme < value.length; subTheme++){

          var currentTICThemeName = value[subTheme].themeName;
          var currentTICThemeTitle = value[subTheme].themeTitle;
          var currentTICSupportInfo = value[subTheme].supportInfo;
          
          // Links
          var currentTICDeviantArtURL = value[subTheme].links.devartsURL;
          var currentTICGithubURL = value[subTheme].links.githubURl;
          var currentTICGnomelookURL = value[subTheme].links.gnomelooksURL;

          // How to install related 
          var currentTICArch = value[subTheme].howToInstall.arch;
          var currentTICFedora = value[subTheme].howToInstall.fedora;
          var currentTICOpenSuse = value[subTheme].howToInstall.opensuse;
          var currentTICUbuntu = value[subTheme].howToInstall.ubuntu;

        } // Ends for-loop


        if (localTICName == currentTICThemeName)
        {
  
          displayTICOutput(currentTICThemeName, currentTICThemeTitle, currentTICSupportInfo, currentTICGnomelookURL, currentTICGithubURL, currentTICDeviantArtURL, currentTICArch, currentTICFedora, currentTICOpenSuse, currentTICUbuntu);

        }

      }); // Ends .each loop 

    });  // Ends getJSON loop

  });
    
}