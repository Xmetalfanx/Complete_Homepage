var ticResults = document.getElementById("TICSection");
var zypperInstall = "sudo zypper install";
var ubuntuInstall = "sudo apt install";
var dnfInstall = "sudo dnf install";
var archInstall = "sudo pacman -S";


// This should show the entire JSON file's info
function displayTICOutput(currentTICThemeName, currentTICThemeTitle, currentTICSupportInfo, currentTICGnomelookURL, currentTICGithubURL, currentTICDeviantArtURL, currentTICArchInstall, currentTICFedoraInstall, currentTICOpenSuseInstall, currentTICUbuntuInstall)
{

      const themeLinks = `
      
        Gnomelook URL: <a href="${currentTICGnomelookURL}" target="_blank" > ${currentTICThemeTitle} on Gnome Look </a> 
        <br />

        Github URL: <a href="${currentTICGithubURL} " target="_blank" > ${currentTICThemeTitle} on Github </a> 
        <br />

        Deviant Art URL: <a href="${currentTICDeviantArtURL}" target="_blank" > ${currentTICThemeTitle} on DeviantArt </a>

      `;

      const howToInstall = `
        <h3> How to Install ${currentTICThemeName} </h3>
  
        <div class="pl-3">
          <span class="font-weight-bold">On Arch: </span>  
          <code> ${archInstall} ${currentTICArchInstall} </code> 
          <br />
          
          <span class="font-weight-bold">On Fedora: </span> 
          <code>${dnfInstall} ${currentTICFedoraInstall} </code> 
          <br />
          
          <span class="font-weight-bold">On openSUSE: </span> 
          <code>${zypperInstall} ${currentTICOpenSuseInstall} </code> 
          <br />
          
          <span class="font-weight-bold">On Ubuntu: </span> 
          <code> ${ubuntuInstall} ${currentTICUbuntuInstall} </code> 
          <br />

        </div>
      `;

      const themeOutput =
        `
      
        <div class="card"> 
          <div class="card-header bg-primary text-white font-weight-bold">${currentTICThemeTitle}</div>
          <div class="card-text p-3"> 
            <div class="row">
              <div class="col-6">
                <div class="font-weight-bold">
                  Theme has support for: ${currentTICSupportInfo}<br/><br/>${themeLinks} 
                  </div>
              </div>
              <div class="col-6">
                <p>Screenshot will go here </p>
              </div>
            </div>
            <br />
            ${howToInstall}
          </div>
        </div>
        
        `;

        // ** NO if statement here 
        ticResults.insertAdjacentHTML("beforeend", themeOutput);
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

          var currentTICThemeName = value[subTheme].ticName;
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

          if (localTICName == currentTICThemeName){
    
            displayTICOutput(currentTICThemeName, currentTICThemeTitle, currentTICSupportInfo, currentTICGnomelookURL, currentTICGithubURL, currentTICDeviantArtURL, currentTICArchInstall, currentTICFedoraInstall, currentTICOpenSuseInstall, currentTICUbuntuInstall);

          }



        } // Ends for-loop



      }); // Ends .each loop 

    });  // Ends getJSON loop

  });
    
}
