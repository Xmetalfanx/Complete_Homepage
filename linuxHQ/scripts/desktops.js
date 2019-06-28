var desktopResults = document.getElementById('desktopSection');
var screenshotDIR = "/linuxHQ/screenshots/";

function displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEGithub, currentDEScreenshot, currentDELatestVersion, currentDEVerUpdated, currentDECategory, currentDEDistroFeature, currentDEReqMem, currentDEReqHDD, currentDEReqProc, currentDEArchVersion, currentDEF28Version, currentDEF29Version, currentDEFRWVersion, currentDESuseL423Version, currentDESuseL15Version, currentDESuseTWVersion, currentDE1604LTSVer, currentDE1804LTSVer, currentDE1810, currentDEMint173Version, currentDEMint18Version, currentDEMint19Version, currentDEarchInstall, currentDEfedoraInstall, currentDEopensuseInstall, currentDEopensuseLeap423Install, currentDEopensuseLeap15Install, currentDEopensuseTWInstall, currentDEubuntuInstall, currentDEmintInstall) {

    // Template Literal for output

    // used INSIDE the tabs below and not seperately 
    const deVersionsOutput = `
        
            
            <h3 class="font-weight-bold">Versions</h3>
            <div>
                <span class="font-weight-bold">
                    Latest Version: ${currentDELatestVersion}
                </span>
                <br />
                <small>
                    Last Updated: ${currentDEVerUpdated}
                </small>
            </div>
            <br/>
            
            <div class="row my-2"> 
                <div class="col">
                    <span class="font-weight-bold">Arch: </span>
                    <span class="text-right">${currentDEArchVersion}</span><br/>
                </div>
                
                <div class="col">
                    <span class="font-weight-bold">Fedora</span>
                    <br/>
                    
                    <span class="font-italic">Fedora 28: </span>
                    <span class="text-right">${currentDEF28Version}</span><br/>
                    <span class="font-italic">Fedora 29: </span>
                    <span class="text-right">${currentDEF29Version}</span><br/>
                    <span class="font-italic">Fedora Rawhide: </span>
                    <span class="text-right"> ${currentDEFRWVersion}</span>
                </div>
                
                <div class="col">
                    <span class="font-weight-bold">openSUSE</span>
                    <br/>
                    <span class="font-italic">OpenSUSE 42.3: </span>
                    <span class="text-right"> ${currentDESuseL423Version}</span>
                    <br/>
                    <span class="font-italic">OpenSUSE 15: </span>
                    <span class="text-right"> ${currentDESuseL15Version}</span>
                    <br/>
                    <span class="font-italic">OpenSUSE Tumbleweed:  </span>
                    <span class="text-right"> ${currentDESuseTWVersion}</span>
                </div>
            </div>
            
            <div class="row my-4">
                <div class="col">
                    <div class="font-weight-bold">Solus</div>
                    <span class="text-right"> </span>
                </div>

                <div class="col">
                    <div class="font-weight-bold">Ubuntu </div>
                    <span class="font-italic">Ubuntu 16.04 LTS: </span>
                    <span class="text-right"> ${currentDE1604LTSVer}</span>
                    <br/>
                    <span class="font-italic">Ubuntu 18.04 LTS: </span>
                    <span class="text-right">${currentDE1804LTSVer}</span>
                    <br/>
                    <span class="font-italic">Ubuntu 18.10:</span>
                    <span class="text-right"> </span>
                </div>

                <div class="col">
                    <div class="font-weight-bold">Linux Mint </div>
                    <span class="font-italic">Mint 17.3: </span>
                    <span class="text-right">${currentDEMint173Version}</span>
                    <br/>
                    <span class="font-italic">Mint 18: </span>
                    <span class="text-right">${currentDEMint18Version}</span>
                    <br/>
                    <span class="font-italic">Mint 19: </span>
                    <span class="text-right">${currentDEMint19Version}</span>
                </div>
            </div>


            <div>
                <small>Disclaimer: I decided to list the versions currently in different distro/versions of that distro. This means the version of different Desktops that may have SHIPPED WITH the version of the distro listed,may not be the same as what I list. </small>
            </div>

        `;


    const deInstallOutput = `
        
        
            <h3 class="font-weight-bold">How to Install: </h3>
            
            <div class="font-weight-bold">Arch Linux: </div>
            <code class="my-3 p-2">${currentDEarchInstall}</code>
            
            <div class="font-weight-bold">Fedora: </div>
            <code class="my-3 p-2">${currentDEfedoraInstall}</code>
            
            <div class="font-weight-bold">OpenSUSE: </div>
                <div class="font-italic">${currentDEopensuseInstall}</div>
                <br />
                    
                <small>POSSIBLE Extra Repos (There may or may not be content below)</small>
                <br />
                    
                <div class="font-italic"> 
                    Use with Caution ... some of these may be so new they break parts of your DE when updating, but these can have newer versions of DEs then in default repos 
                </div> <br />
                
                <ul>
                    <li class="font-weight-bold">Leap 42.3</li>
                        <code class="my-3 p-2">${currentDEopensuseLeap423Install}</code>
                    <li class="font-weight-bold">Leap 15.0 </li>
                        <code class="my-3 p-2">${currentDEopensuseLeap15Install}</code>
                    <li class="font-weight-bold">Tumbleweed</li>
                        <code class="my-3 p-2">${currentDEopensuseTWInstall}</code>
                </ul>
            
            
            <div class="font-weight-bold">Ubuntu</div>
            <ul>
                <li>Installing on Ubuntu: 
                    <code class="my-3 p-2">${currentDEubuntuInstall}</code>
                </li>
                <li>Installing on Linux Mint: 
                    <code class="my-3 p-2">${currentDEmintInstall}</code>
                </li>
            </ul> 
        `;

    // Complete Header 
    const deInfoCard = `

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="font-weight-bold">${currentDETitle}</h3>
                </div>
                <div class="card-text px-3 py-2">
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
                        
                        <div class="col">
                            <img class="d-md-block d-none mx-auto p-4 img-fluid lazyload" data-src="${screenshotDIR}${currentDEScreenshot}" alt="${currentDETitle} screenshot" >
                        </div>
                    </div>
                    

                        ${deVersionsOutput}

                        <br /><hr />
                
                        ${deInstallOutput}
                
                </div> <!-- Closes card-text -->
            </div> <!-- Closes card --> 
                
            `;

    // Main output
    console.log("currentDEScreenshot: " + currentDEScreenshot);
    desktopResults.insertAdjacentHTML("beforeend", deInfoCard);

}


////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function getDesktopData(data, $localDEName) {

    $(document).ready(function() {

        jsonURL = "http://xmetal.x10.mx/linuxHQ/json/desktops.json";

        // Get JSON Data
        $.getJSON(jsonURL, function(data) {

            // For each key value 
            $.each(data, function(key, value) {

                // The key is 'gtk2' or 'qt'

                var currentFramework = key;

                for (var subFrameworks = 0; subFrameworks < value.length; subFrameworks++) {

                    // ** I need to know value and subFrameworks here 

                    var currentDEName = value[subFrameworks].desktopName;
                    var currentDETitle = value[subFrameworks].desktopTitle;

                    // More Info
                    var currentDEHomepage = value[subFrameworks].generalInfo.desktopHomepage;
                    var currentDEGithub = value[subFrameworks].generalInfo.desktopGithubURL;
                    var currentDECategory = value[subFrameworks].generalInfo.desktopCatagory;
                    var currentDEDistroFeature = value[subFrameworks].generalInfo.distrosFeature;

                    // Requirnments
                    var currentDEReqMem = value[subFrameworks].requirements.reqMemory;
                    var currentDEReqHDD = value[subFrameworks].requirements.reqHDDSpace;
                    var currentDEReqProc = value[subFrameworks].requirements.reqProcessor;

                    // Screenshot - just one for now 
                    var currentDEScreenshot = value[subFrameworks].screenshots.src;

                    // Versions
                    var versionJSON = value[subFrameworks].versions;

                    var currentDELatestVersion = versionJSON.latestVersion;
                    // The point of this is "the last time I checked/updated" even some of the info 
                    var currentDEVerUpdated = versionJSON.updated;

                    // Arch
                    var currentDEArchVersion = versionJSON.arch;

                    // Fedora
                    var currentDEF28Version = versionJSON.fedora.f28;
                    var currentDEF29Version = versionJSON.fedora.f29;
                    var currentDEFRWVersion = versionJSON.fedora.rawhide;

                    // OpenSuse
                    var currentDESuseL423Version = versionJSON.opensuse.leap423;
                    var currentDESuseL15Version = versionJSON.opensuse.leap15;
                    var currentDESuseTWVersion = versionJSON.opensuse.tumbleweed;

                    var ubuntuVerJSON = value[subFrameworks].versions.ubuntu;
                    // Linux Mint
                    var currentDEMint173Version = ubuntuVerJSON.mint.mint173;
                    var currentDEMint18Version = ubuntuVerJSON.mint.mint18;
                    var currentDEMint19Version = ubuntuVerJSON.mint.mint19;

                    // Ubuntu LTS
                    var currentDE1604LTSVer = ubuntuVerJSON.lts1604ver;
                    var currentDE1804LTSVer = ubuntuVerJSON.lts1804ver;

                    var currentDE1810 = ubuntuVerJSON.ubuntu1810;

                    // End Version vars
                    ///////////////////////////////////////////

                    // Begin Install vars 
                    var currentDEarchInstall = value[subFrameworks].install.arch;
                    var currentDEfedoraInstall = value[subFrameworks].install.fedora;

                    var openSuseInstallJSON = value[subFrameworks].install.opensuse;
                    var currentDEopensuseInstall = openSuseInstallJSON.opensuseInstall;
                    var currentDEopensuseLeap423Install = openSuseInstallJSON.repoLeap423;
                    var currentDEopensuseLeap15Install = openSuseInstallJSON.repoLeap15;
                    var currentDEopensuseTWInstall = openSuseInstallJSON.repoTW;

                    var currentDEubuntuInstall = value[subFrameworks].install.ubuntu.ubuntuInstall;
                    var currentDEmintInstall = value[subFrameworks].install.ubuntu.mintInstall;

                    ///////////////////////////////////////////////////////////////////////////////////

                    if (localDEName == currentDEName) {
                        displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEGithub, currentDEScreenshot, currentDELatestVersion, currentDEVerUpdated, currentDECategory, currentDEDistroFeature, currentDEReqMem, currentDEReqHDD, currentDEReqProc, currentDEArchVersion, currentDEF28Version, currentDEF29Version, currentDEFRWVersion, currentDESuseL423Version, currentDESuseL15Version, currentDESuseTWVersion, currentDE1604LTSVer, currentDE1804LTSVer, currentDE1810, currentDEMint173Version, currentDEMint18Version, currentDEMint19Version, currentDEarchInstall, currentDEfedoraInstall, currentDEopensuseInstall, currentDEopensuseLeap423Install, currentDEopensuseLeap15Install, currentDEopensuseTWInstall, currentDEubuntuInstall, currentDEmintInstall);
                    }
                }

            }); // Ends .each loop 

        }); // ends getJSON loop


    });

}