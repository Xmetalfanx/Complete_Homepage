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
  currentDEF32Version,
  currentDEFRWVersion,
  currentDESuseL15Version,
  currentDESuseTWVersion,
  currentDESolusVersion,
  currentDE1604LTSVer,
  currentDE1804LTSVer,
  currentDE2004LTSVer,
  currentDEMint18Version,
  currentDEMint19Version,
  currentDEMint20Version,
  currentDEarchInstall,
  currentDEfedoraInstall,
  currentDEopensuseInstall,
  currentDEopensuseLeap15Install,
  currentDEopensuseTWInstall,
  currentDEubuntuInstall,
  currentDEmintInstall
) {
  // Template Literal for output

  // used INSIDE the tabs below and not separately
  const deVersionsOutput = `
            <h3 class="font-weight-bold">Versions</h3>
            <div id="linuxVersions">
                <small> Last Updated: ${currentDEVerUpdated} </small>
            <br/>

            <div class="row my-2">
              <div class="col">
                  <span class="distroBaseTitle">Arch:</span>
                  <span class="version">${currentDEArchVersion}</span><br/>
              </div>

              <div class="col">
                  <span class="distroBaseTitle">Fedora</span>
                  <br/>
                  <span class="versionTitle">32: </span>
                  <span class="version">${currentDEF32Version}</span><br/>
                  <span class="versionTitle">Rawhide: </span>
                  <span class="version"> ${currentDEFRWVersion}</span>
              </div>

              <div class="col">
                  <span class="distroBaseTitle">openSUSE</span>
                  <br/>
                  <span class="versionTitle">15.0: </span>
                  <span class="version"> ${currentDESuseL15Version}</span>
                  <br/>
                  <span class="versionTitle">Tumbleweed: </span>
                  <span class="version"> ${currentDESuseTWVersion}</span>
              </div>
            </div>

            <div class="row my-4">
              <div class="col">
                  <div class="distroBaseTitle">Solus</div>
                  <span class="version">${currentDESolusVersion} </span>
              </div>

              <div class="col">
                  <div class="distroBaseTitle">Ubuntu </div>
                  <span class="versionTitle">18.04 Bionic LTS: </span>
                  <span class="version">${currentDE1804LTSVer}</span>
                  <br/>
                  <span class="versionTitle">20.04 Focal LTS: </span>
                  <span class="version">${currentDE2004LTSVer}</span>
              </div>

              <div class="col">
                  <div class="distroBaseTitle">Linux Mint </div>
                  <span class="versionTitle">19: </span>
                  <span class="version">${currentDEMint19Version}</span>
                  <br />
                  <span class="versionTitle">20: </span>
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
              <li class="font-weight-bold">Leap 15.0 </li>
                  <code class="my-3 p-2">${currentDEopensuseLeap15Install}</code>
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

            <div class="card mx-3 shadow">
                <div class="card__header">
                    <h3>${currentDETitle}</h3>
                </div>
                <div class="card__body">
                    <div class="row">
                        <div class="col">
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

                        <br /><hr />

                        ${deInstallOutput}

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
    jsonURL = '/linuxHQ/json/desktops.json';

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
          var currentDEF32Version = versionJSON.fedora.f32;
          var currentDEFRWVersion = versionJSON.fedora.rawhide;

          // OpenSuse
          var currentDESuseL15Version = versionJSON.opensuse.leap151;
          var currentDESuseTWVersion = versionJSON.opensuse.tumbleweed;

          // Solus
          var currentDESolusVersion = versionJSON.solus;

          var ubuntuVerJSON = value[subFrameworks].versions.ubuntu;

          // Ubuntu LTS
          var currentDE1604LTSVer = ubuntuVerJSON.xenial;
          var currentDE1804LTSVer = ubuntuVerJSON.bionic;
          var currentDE2004LTSVer = ubuntuVerJSON.focal;

          // Linux Mint
          var currentDEMint18Version = ubuntuVerJSON.mint.mint18;
          var currentDEMint19Version = ubuntuVerJSON.mint.mint19;
          var currentDEMint20Version = ubuntuVerJSON.mint.mint20;

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
              currentDEF32Version,
              currentDEFRWVersion,
              currentDESuseL15Version,
              currentDESuseTWVersion,
              currentDESolusVersion,
              currentDE1604LTSVer,
              currentDE1804LTSVer,
              currentDE2004LTSVer,
              currentDEMint18Version,
              currentDEMint19Version,
              currentDEMint20Version,
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
