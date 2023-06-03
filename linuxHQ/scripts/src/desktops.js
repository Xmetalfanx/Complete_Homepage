var desktopResults = document.getElementById('desktopSection');
var screenshotDIR = '/linuxHQ/screenshots/';

function displayDEOutput(
  currentDEName,
  currentDETitle,
  currentDEHomepage,
  currentDEGithub,
  currentDEScreenshot,
  currentDESShotTN,
  currentDESShotDistro,
  currentDELatestVersion,
  currentDEVerUpdated,
  currentDECategory,
  currentDEDistroFeature,
  currentDEReqMem,
  currentDEReqHDD,
  currentDEReqProc,
  currentDEArchVersion,
  currentDEF37Version,
  currentDEF38Version,
  currentDESuseL153Version,
  currentDESuseTWVersion,
  currentDESolusVersion,
  currentDEUbuntu2004LTSVer,
  currentDEUbuntu2204LTSVer,
  currentDEUbuntu2304Ver,
  currentDEMint20Version,
  currentDEarchInstall,
  currentDEfedoraInstall,
  currentDEopensuseInstall,
  currentDEopensuseLeap153Install,
  currentDEopensuseTWInstall,
  currentDEubuntuInstall,
  currentDEmintInstall
) {
  // Template Literal for output

  // used INSIDE the tabs below and not separately
  const deVersionsOutput = `
            <h3 class="font-weight-bold">Versions</h3>
            <div id="linux-versions">
                <small> Last Updated: ${currentDEVerUpdated} </small>
            <br/>

            <div class="row">
              <div class="col">
                  <span class="distroBaseTitle">Arch:</span>
                  <span class="version">${currentDEArchVersion}</span><br/>
              </div>

              <div class="col">
                  <span class="distroBaseTitle">Fedora</span>
                  <br/>
                  <span class="versionTitle">37: </span>
                  <span class="version">${currentDEF37Version}</span><br/>
                  <span class="versionTitle">38: </span>
                  <span class="version">${currentDEF38Version}</span><br/>


              </div>

              <div class="col">
                  <span class="distroBaseTitle">openSUSE</span><br />
                  <span class="versionTitle">Leap 15.3: </span>
                  <span class="version"> ${currentDESuseL153Version}</span>
                  <br/>
                  <span class="versionTitle">Tumbleweed: </span>
                  <span class="version"> ${currentDESuseTWVersion}</span>
              </div>
            </div>

            <div class="row">
              <div class="col">
                  <div class="distroBaseTitle">Solus</div>
                  <span class="version">${currentDESolusVersion} </span>
              </div>

              <div class="col">
                  <div class="distroBaseTitle">Ubuntu </div>
                  <span class="versionTitle">20.04 Focal LTS: </span>
                  <span class="version">${currentDEUbuntu2004LTSVer}</span>
                  <br />
                  <span class="versionTitle">22.04 Jammy LTS: </span>
                  <span class="version">${currentDEUbuntu2204LTSVer}</span>
                  <br />
                  <span class="versionTitle">23.04 Lunar: </span>
                  <span class="version">${currentDEUbuntu2304Ver}</span>
              </div>

              <div class="col">
                  <div class="distroBaseTitle">Linux Mint </div>
                  <span class="versionTitle">20: </span>
                  <span class="version">${currentDEMint20Version}</span>
                  <br />
                  <span class="versionTitle">21: </span>
                  <span class="version">${currentDEMint20Version}</span>
              </div>
            </div>
          </div>

        `;

  const deInstallOutput = `
    <h3 class="font-weight-bold">How to Install: </h3>

    <div class="accordion">
      <!-- Arch Start -->
      <input type="checkbox" id="archInstall" />
      <label for="archInstall">Arch Linux</label>

      <div class="content">
        <code class="my-3 p-2">${currentDEarchInstall}</code>
      </div>
      <!-- Arch End -->

      <!-- Fedora Start -->
      <input type="checkbox" id="fedoraInstall" />
      <label for="fedoraInstall">Fedora</label>

      <div class="content">
          Filler Text
      </div>
      <!-- Fedora End -->


      <!-- openSUSE Start -->
      <input type="checkbox" id="openSUSEInstall" />
      <label for="openSUSEInstall">openSUSE</label>

      <div class="content">
        <div class="font-weight-bold">OpenSUSE: </div>
          <div class="font-italic">${currentDEopensuseInstall}</div>
          <br />

          <small>POSSIBLE Extra Repos (There may or may not be content below)</small>
          <br />

          <div class="font-italic">
              Use with Caution ... some of these may be so new they break parts of your DE when updating, but these can have newer versions of DEs then in default repos
          </div>
          <br />

          <ul>
              <li class="font-weight-bold">Tumbleweed</li>
                  <code class="my-3 p-2">${currentDEopensuseTWInstall}</code>
          </ul>

      </div>
      <!-- OpenSUSE End -->


      <!-- Ubuntu Start -->
      <input type="checkbox" id="ubuntuInstall" />
      <label for="ubuntuInstall">Ubuntu</label>

      <div class="content">
        <ul>
          <li>Installing on Ubuntu:
              <code class="my-3 p-2">${currentDEubuntuInstall}</code>
          </li>
          <li>Installing on Linux Mint:
              <code class="my-3 p-2">${currentDEmintInstall}</code>
          </li>
        </ul>
      </div>
    </div>
    <!-- Ubuntu End -->


        `;

  // Complete Header
  const deInfoCard = `

            <div class="card mx-3">
                <div class="card__header">
                    <h3>${currentDETitle}</h3>
                </div>
                <div class="card__body">
                    <div class="row">
                        <div class="col px-3">
                          <span class="font-weight-bold">Homepage:</span>
                            <a href="${currentDEHomepage}" target="_blank"> ${currentDETitle}'s Homepage</a>
                          <br>

                          <span class="font-weight-bold">Github URL: </span>
                            <a href="${currentDEGithub}" target="_blank">${currentDETitle} on Github</a>
                          <br><br>

                          <span class="font-weight-bold">Latest Version: </span>${currentDELatestVersion}<br>
                          <span class="font-weight-bold">Desktop Category: </span>${currentDECategory}<br>
                          <span class="font-weight-bold">Distros That Feature: </span>${currentDEDistroFeature}<br>
                          <br>

                          <span class="font-weight-bold">Desktop Requirements: </span>
                          <ul>
                            <li>
                              <span class="font-italic">Required Processor: </span>${currentDEReqProc}
                            </li>
                            <li>
                              <span class="font-italic">Required Memory: </span>${currentDEReqMem}
                            </li>
                            <li>
                              <span class="font-italic">Required Hard Drive Space: </span>${currentDEReqHDD}
                            </li>
                          </ul>

                        </div>

                        <div class="col d-none d-md-block">
                          <a href="${screenshotDIR}${currentDEScreenshot}" target="_blank">
                            <img class="d-md-block d-none mx-auto thumbnail-fluid--lg" src="${screenshotDIR}${currentDESShotTN}" alt="${currentDESShotDistro} screenshot for ${currentDETitle}" loading="lazy" />

                            ${currentDESShotDistro} screenshot for ${currentDETitle}
                          </a>
                        </div>
                    </div>


                        ${deVersionsOutput}

                        <br />

                </div> <!-- Closes card-text -->
            </div> <!-- Closes card -->

            `;

  // Main output
  //console.log('currentDEScreenshot: ' + currentDEScreenshot);
  desktopResults.insertAdjacentHTML('beforeend', deInfoCard);
}

////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function getDesktopData(data, $localDEName) {
  $(document).ready(function () {
    jsonURL = '/linuxHQ/json/desktops-min.json';

    // Get JSON Data
    $.getJSON(jsonURL, function (data) {
      // For each key value
      $.each(data, function (key, value) {
        // The key is 'gtk2' or 'qt'

        var currentFramework = key;

        for (
          var subFrameworks = 0;
          subFrameworks < value.length;
          subFrameworks++
        ) {
          // ** I need to know value and subFrameworks here

          var currentDEName = value[subFrameworks].desktopName;
          var currentDETitle = value[subFrameworks].desktopTitle;

          // More Info
          var currentDEHomepage =
            value[subFrameworks].generalInfo.desktopHomepage;
          var currentDEGithub =
            value[subFrameworks].generalInfo.desktopGithubURL;
          var currentDECategory =
            value[subFrameworks].generalInfo.desktopCatagory;
          var currentDEDistroFeature =
            value[subFrameworks].generalInfo.distrosFeature;

          // Requirnments
          var currentDEReqMem = value[subFrameworks].requirements.reqMemory;
          var currentDEReqHDD = value[subFrameworks].requirements.reqHDDSpace;
          var currentDEReqProc = value[subFrameworks].requirements.reqProcessor;

          // Screenshot - just one for now
          var currentDESShotTN = value[subFrameworks].screenshots.thumbnail;
          var currentDEScreenshot = value[subFrameworks].screenshots.src;
          var currentDESShotDistro = value[subFrameworks].screenshots.distro;

          // Versions
          var versionJSON = value[subFrameworks].versions;

          var currentDELatestVersion = versionJSON.latestVersion;
          // The point of this is "the last time I checked/updated" even some of the info
          var currentDEVerUpdated = versionJSON.updated;

          // Arch
          var currentDEArchVersion = versionJSON.arch;

          // Fedora
          var currentDEF37Version = versionJSON.fedora.f37;
          var currentDEF38Version = versionJSON.fedora.f38;

          // OpenSuse
          var currentDESuseL153Version = versionJSON.opensuse.leap153;
          var currentDESuseTWVersion = versionJSON.opensuse.tumbleweed;

          // Solus
          var currentDESolusVersion = versionJSON.solus;

          var ubuntuVerJSON = value[subFrameworks].versions.ubuntu;

          // Ubuntu LTS
          var currentDEUbuntu2004LTSVer = ubuntuVerJSON.focal;
          var currentDEUbuntu2204LTSVer = ubuntuVerJSON.jammy;

          // Ubuntu non-LTS
          var currentDEUbuntu2304Ver = ubuntuVerJSON.lunar;

          // Linux Mint
          var currentDEMint20Version = ubuntuVerJSON.mint.mint20;
          var currentDEMint21Version = ubuntuVerJSON.mint.mint21;

          // End Version vars
          ///////////////////////////////////////////

          // Begin Install vars
          var currentDEarchInstall = value[subFrameworks].install.arch;
          var currentDEfedoraInstall = value[subFrameworks].install.fedora;

          var openSuseInstallJSON = value[subFrameworks].install.opensuse;
          var currentDEopensuseInstall = openSuseInstallJSON.opensuseInstall;
          var currentDEopensuseLeap15Install = openSuseInstallJSON.repoLeap15;
          var currentDEopensuseTWInstall = openSuseInstallJSON.repoTW;

          var currentDEubuntuInstall =
            value[subFrameworks].install.ubuntu.ubuntuInstall;
          var currentDEmintInstall =
            value[subFrameworks].install.ubuntu.mintInstall;

          ///////////////////////////////////////////////////////////////////////////////////

          if (localDEName == currentDEName) {
            displayDEOutput(
              currentDEName,
              currentDETitle,
              currentDEHomepage,
              currentDEGithub,
              currentDEScreenshot,
              currentDESShotTN,
              currentDESShotDistro,
              currentDELatestVersion,
              currentDEVerUpdated,
              currentDECategory,
              currentDEDistroFeature,
              currentDEReqMem,
              currentDEReqHDD,
              currentDEReqProc,
              currentDEArchVersion,
              currentDEF37Version,
              currentDEF38Version,
              currentDESuseL153Version,
              currentDESuseTWVersion,
              currentDESolusVersion,
              currentDEUbuntu2004LTSVer,
              currentDEUbuntu2204LTSVer,
              currentDEUbuntu2304Ver,
              currentDEMint20Version,
              currentDEMint21Version,
              currentDEarchInstall,
              currentDEfedoraInstall,
              currentDEopensuseInstall,
              currentDEopensuseLeap15Install,
              currentDEopensuseTWInstall,
              currentDEubuntuInstall,
              currentDEmintInstall
            );
          }
        }
      }); // Ends .each loop
    }); // ends getJSON loop
  });
}
