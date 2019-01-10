var ticResults = document.getElementById("TICSection");
var zypperInstall = "sudo zypper install";
var ubuntuInstall = "sudo apt install";
var dnfInstall = "sudo dnf install";
var archInstall = "sudo pacman -S"l


// This should show the entire JSON file's info
function displayTICOutput(currentTICThemeName, currentTICThemeTitle, currentTICSupportInfo, currentTICGnomelookURL, currentTICGithubURL, currentTICDeviantArtURL, currentTICArchInstall, currentTICFedoraInstall, currentTICOpenSuseInstall, currentTICUbuntuInstall){

  // Should loop through the JSON file

      const themeLinks = `
      
        Gnomelook URL: <a href="${currentTICGnomelookURL}" target="_blank" >
        ${currentTICThemeName} on Gnome Look </a> <br />

        Github URL: <a href="${currentTICGithubURL} " target="_blank" >
        ${currentTICThemeName} on Github </a> <br />

        Deviant Art URL: <a href="${currentTICDeviantArtURL}" target="_blank" >
        ${currentTICThemeName} on DeviantArt </a>

      `;

      const howToInstall = `
        How to Install ${currentTICThemeName}
        <br />
        <br />
        <div class="pl-3">
          <span class="font-weight-bold">On Arch: </span> ${archInstall} ${currentTICArchInstall}
          <br />
          
          <span class="font-weight-bold">On Fedora: </span> ${dnfInstall} ${currentTICFedoraInstall}
          <br />
          
          <span class="font-weight-bold">On openSUSE: </span> ${zypperInstall} ${currentTICOpenSuseInstall}
          <br />
          
          <span class="font-weight-bold">On Ubuntu: </span> ${ubuntuInstall} ${currentTICUbuntuInstall}
          <br />

        </div>
      `;

      const themeOutput =
        `
      
          <div class="card"> 
            <div class="card-header bg-primary text-white font-weight-bold">${currentTICThemeTitle}</div>
            <div class="card-text"> 
              <div class="font-weight-bold">
                Theme has support for: </div>
                
                ${currentTICSupportInfo}
                <br/><br/>
                
                ${themeLinks} 
                <br />

                ${howToInstall}
            
            </div>
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
          var currentTICArchInstall = value[subTheme].howToInstall.arch;
          var currentTICFedoraInstall = value[subTheme].howToInstall.fedora;
          var currentTICOpenSuseInstall = value[subTheme].howToInstall.opensuse;
          var currentTICUbuntuInstall = value[subTheme].howToInstall.ubuntu;

        } // Ends for-loop


        if (localTICName == currentTICThemeName)
        {
  
          displayTICOutput(currentTICThemeName, currentTICThemeTitle, currentTICSupportInfo, currentTICGnomelookURL, currentTICGithubURL, currentTICDeviantArtURL, currentTICArchInstall, currentTICFedoraInstall, currentTICOpenSuseInstall, currentTICUbuntuInstall);

        }

      }); // Ends .each loop 

    });  // Ends getJSON loop

  });
    
}
