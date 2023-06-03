var ticOutput = document.querySelector('#ticsection');
var screenshotDIR = '/linuxHQ/screenshots/';


var zypperInstall = 'sudo zypper install';
var ubuntuInstall = 'sudo apt install';
var dnfInstall = 'sudo dnf install';
var archInstall = 'sudo pacman -S';

// This should show the entire JSON file's info
function displayTICOutput(
  currentTICName,
  currentTICTitle,
  currentTICSupportInfo,
  currentTICGnomelookURL,
  currentTICGithubURL,
  currentTICDeviantArtURL,
  currentTICArchInstall,
  currentTICFedoraInstall,
  currentTICOpenSuseInstall,
  currentTICUbuntuInstall,
  currentTICScreenshot,
  currentTICSSThumbnail
) {
  const themeLinks = `

        <span class="font-weight-bold">Gnomelook URL:</span>
        <a href="${currentTICGnomelookURL}" target="_blank" >
        ${currentTICName} on Gnome Look </a> <br />

        <span class="font-weight-bold">Github URL: </span>
        <a href="${currentTICGithubURL} " target="_blank" >
        ${currentTICName} on Github </a> <br />

        <span class="font-weight-bold">Deviant Art URL: </span>
        <a href="${currentTICDeviantArtURL}" target="_blank" >
        ${currentTICName} on DeviantArt </a>
        <br />
      `;

  const howToInstall = `
        <h3>How to Install ${currentTICName} </h3>
        <div>
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

  const themeOutput = `

          <div class="card">
            <div class="card__header">${currentTICTitle}</div>
            <div class="card__body">
              <div class="row">
                <div class="col">

                  <span class="font-weight-bold">Theme has support for: </span>
                  ${currentTICSupportInfo}
                  <br/><br/>

                  ${themeLinks}
                  <br />

                  ${howToInstall}
                </div>



                <div class="col">
                  <div class="m-auto">
                  <a href="${screenshotDIR}${currentTICScreenshot}" target="_blank" >
                    <img data-src="${screenshotDIR}${currentTICSSThumbnail}" alt="${currentTICTitle} Screenshot"  class="d-md-block d-none img-fluid" loading="lazy" />
                  </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        `;

  console.log('themeOutput:' + themeOutput);
  ticOutput.insertAdjacentHTML('beforeend', themeOutput);
}

function getTICData(data, $localTICName) {
  $(document).ready(function () {
    ticJSONURL = 'http://xmetal.x10.mx/linuxHQ/json/tic.json';

    $.getJSON(ticJSONURL, function (data) {
      // For Each key value
      $.each(data, function (key, value) {
        // The key is "themes" or "icons" or "cursors"; Values are the full entry I kneed

        for (let currentTIC = 0; currentTIC < value.length; currentTIC++) {
          // theme, icons, or cursors
          currentTICType = key;

          currentTICEntry = value[currentTIC];

          // Shows each array (say each theme for example, in "themes" where 'themes' is the key)
          //console.log(currentTICEntry);

          console.log(currentTICEntry.themeTitle);

          let currentTICTName = currentTICEntry.ticName;
          let currentTICTitle = currentTICEntry.themeTitle;
          let currentTICSupportInfo = currentTICEntry.supportInfo;

          // Links
          let currentTICDeviantArtURL = currentTICEntry.links.delettsURL;
          let currentTICGithubURL = currentTICEntry.links.githubURl;
          let currentTICGnomelookURL = currentTICEntry.links.gnomelooksURL;

          // How to install related
          let currentTICArchInstall = currentTICEntry.howToInstall.arch;
          let currentTICFedoraInstall = currentTICEntry.howToInstall.fedora;
          let currentTICOpenSuseInstall = currentTICEntry.howToInstall.opensuse;
          let currentTICUbuntuInstall = currentTICEntry.howToInstall.ubuntu;


          let currentTICScreenshot = currentTICEntry.screenshot.src;
          let currentTICSSThumbnail = currentTICEntry.screenshot.thumbnail;

          if (localTICName == currentTICTName) {
            displayTICOutput(
              currentTICTName,
              currentTICTitle,
              currentTICSupportInfo,
              currentTICGnomelookURL,
              currentTICGithubURL,
              currentTICDeviantArtURL,
              currentTICArchInstall,
              currentTICFedoraInstall,
              currentTICOpenSuseInstall,
              currentTICUbuntuInstall,
              currentTICScreenshot,
              currentTICSSThumbnail
            );
          }
        }
      }); // Ends .each loop
    }); // Ends getJSON loop
  });
}
