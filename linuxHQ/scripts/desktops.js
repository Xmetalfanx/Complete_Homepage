var desktopResults = document.getElementById('desktopSection');

function displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEGithub, currentDELatestVersion, currentDECatagory, currentDEDistroFeature, currentDEReqMem, currentDEReqHDD, currentDEReqProc, currentDEArchVersion, currentDEF27Version, currentDEF28Version, currentDEFRWVersion, currentDESuseL423Version, currentDESuseL15Version, currentDESuseTWVersion, currentDEMint173Version, currentDEMint18Version, currentDEMint19Version, currentDEarchInstall, currentDEfedoraInstall, currentDEopensuseInstall, currentDEopensuseLeap423Install, currentDEopensuseLeap15Install, currentDEopensuseTWInstall, currentDEubuntuInstall, currentDEmintInstall)
{

    // Template Literal for output

    // used INSIDE the tabs below and not seperately 
    const deVersionsOutput = `
        
        <h3 class="font-weight-bold">Versions</h3>
        <div class="font-weight-bold">Latest Version: ${currentDELatestVersion}</div>
        
        <br />
            
            <div class="row">
                <div class="col-md-3"> Arch: ${currentDEArchVersion}  </div>

                <div class="col-md-3">    
                    <ul>Fedora
                        <li>
                            <span class="font-italics">Fedora 27: ${currentDEF27Version} </span>
                        </li>
                        <li>
                            <span class="font-italics"> Fedora 28: ${currentDEF28Version} </span>
                        </li>
                        <li>
                            <span class="font-italics">Fedora Rawhide: ${currentDEFRWVersion}
                        </li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <ul>openSuse
                        <li>
                            <span class="font-italics">OpenSuse Leap 42.3: ${currentDESuseL423Version} </span>
                        </li>
                        <li>
                            <span class="font-italics">OpenSuse Leap 15: ${currentDESuseL15Version} </span>
                        </li>
                        <li>
                            <span class="font-italics">OpenSuse Tumbleweed: ${currentDESuseTWVersion} </span>
                        </li>
                    </ul>
                </div>

            <div class="col-md-3"> Ubuntu Based: </div>

        </div> <!-- Closes Row -->

        <br />
        <hr />`;


        const deInstallOutput = `
        
        
            <h3 class="font-weight-bold">How to Install: </h3>
            
            <div class="font-weight-bold">Arch Linux: </div>
            <kbd>${currentDEarchInstall}</kbd>
            
            <div class="font-weight-bold">Fedora: </div>
            <kbd>${currentDEfedoraInstall}</kbd>
            
            <div class="font-weight-bold">OpenSUSE: </div>
                <div>Install on OpenSUSE
                    <span class="font-italic">${currentDEopensuseInstall}</span>
                </div><br />
                    
                <div>POSSIBLE Extra Repos (There may or may not be content below)</div>
                <br />
                    
                <div class="font-italic"> 
                    Use with Caution ... some of these may be so new they break parts of your DE when updating, but these can have newer versions of DEs then in default repos 
                </div> <br />
                
                <ul>
                    <li class="font-weight-bold">Leap 42.3</li>
                        <kbd>${currentDEopensuseLeap423Install}</kbd>
                    <li class="font-weight-bold">Leap 15.0 </li>
                        <kbd>${currentDEopensuseLeap15Install}</kbd>
                    <li class="font-weight-bold">Tumbleweed</li>
                        <kbd>${currentDEopensuseTWInstall}</kbd>
                </ul>
            
            
            <div class="font-weight-bold">Ubuntu</div>
            <ul>
                <li>Installing on Ubuntu: 
                    <kbd>${currentDEubuntuInstall}</kbd>
                </li>
                <li>Installing on Linux Mint: 
                    <kbd>${currentDEmintInstall}</kbd>
                </li>
            </ul> 
        `;


    // Complete Header 
    const deInfoCard = `

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="font-weight-bold">${currentDETitle}</h3>
                </div>
                <div class="card-text">
                    <div class="row"> 
                        <div class="col-md-6">
                            <span class="font-weight-bold">Homepage:</span>
                            <a href="${currentDEHomepage}" target="_blank">${currentDETitle}'s Homepage</a><br>
                            <span class="font-weight-bold">Github URL: </span>

                            <a href="${currentDEGithub}" target="_blank">${currentDETitle} on Github</a><br><br>

                            <span class="font-weight-bold">Latest Version: </span>${currentDELatestVersion}<br>
                            
                            <span class="font-weight-bold">Desktop Catagory: </span>${currentDECatagory}<br>
                            <span class="font-weight-bold">Distros That Feature: </span>${currentDEDistroFeature}<br>
                            
                            <br>
                        </div>
                        
                        <div class="col-md-6">
                            <img src="https://picsum.photos/400/400/?random">
                        </div>
                    </div>
                    
                    <span class="font-weight-bold">Desktop Requirements: </span>
                    <ul>
                        <li> <span class="font-italics">Required Processor: </span>${currentDEReqProc}</li>
                        <li> <span class="font-italics">Required Memory: </span>${currentDEReqMem}</li>
                        <li> <span class="font-italics">Required Hard Drive Space: </span>${currentDEReqHDD}</li>
                    </ul>
                
                    ${deVersionsOutput}
                    ${deInstallOutput}

                </div> <!-- Closes card-text -->
            </div> <!-- Closes card --> 
                
            `;

        // Main output
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
                    var currentDECatagory = value[subFrameworks].generalInfo.desktopCatagory;
                    var currentDEDistroFeature = value[subFrameworks].generalInfo.distrosFeature;

                    // Requirnments
                    var currentDEReqMem = value[subFrameworks].requirements.reqMemory;
                    var currentDEReqHDD = value[subFrameworks].requirements.reqHDDSpace;
                    var currentDEReqProc = value[subFrameworks].requirements.reqProcessor;

                    // Versions

                    var currentDELatestVersion = value[subFrameworks].versions.latestVersion;
                    
                    // Arch
                    var currentDEArchVersion = value[subFrameworks].versions.arch;

                    // Fedora
                    var currentDEF27Version = value[subFrameworks].versions.fedora.f27;
                    var currentDEF28Version = value[subFrameworks].versions.fedora.f28;
                    var currentDEFRWVersion = value[subFrameworks].versions.fedora.rawhide;

                    // OpenSuse
                    var currentDESuseL423Version = value[subFrameworks].versions.opensuse.leap423;
                    var currentDESuseL15Version = value[subFrameworks].versions.opensuse.leap15;
                    var currentDESuseTWVersion = value[subFrameworks].versions.opensuse.tumbleweed;

                    // Linux Mint
                    var currentDEMint173Version = value[subFrameworks].versions.ubuntu.mint.mint173;
                    var currentDEMint18Version = value[subFrameworks].versions.ubuntu.mint.mint18;
                    var currentDEMint19Version = value[subFrameworks].versions.ubuntu.mint.mint19;

                    // Ubuntu LTS
                    var currentDE1604LTS = value[subFrameworks].versions;
                    var currentDE1804LTS = value[subFrameworks].versions;

                    // Ubuntu non-LTS
                    var currentDE1810 = value[subFrameworks].versions;

                    // End Version vars
                    ///////////////////////////////////////////

                    // Begin Install vars 
                    var currentDEarchInstall = value[subFrameworks].install.arch;
                    var currentDEfedoraInstall =  value[subFrameworks].install.fedora;
                    
                    // Opensuse install and other Repo info 
                    var currentDEopensuseInstall = value[subFrameworks].install.opensuse.opensuseInstall;

                    var currentDEopensuseLeap423Install = value[subFrameworks].install.opensuse.repoLeap423;
                    var currentDEopensuseLeap15Install = value[subFrameworks].install.opensuse.repoLeap15;
                    
                    // This is if say TW also has another repo for a DE 
                    var currentDEopensuseTWInstall = value[subFrameworks].install.opensuse.repoTW;

                    var currentDEubuntuInstall = value[subFrameworks].install.ubuntu.ubuntuInstall;
                    var currentDEmintInstall = value[subFrameworks].install.ubuntu.mintInstall;

                    ///////////////////////////////////////////////////////////////////////////////////
                
                    if (localDEName == currentDEName)
                    {
                        displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEGithub, currentDELatestVersion, currentDECatagory, currentDEDistroFeature, currentDEReqMem, currentDEReqHDD, currentDEReqProc, currentDEArchVersion, currentDEF27Version, currentDEF28Version, currentDEFRWVersion, currentDESuseL423Version, currentDESuseL15Version, currentDESuseTWVersion, currentDEMint173Version, currentDEMint18Version, currentDEMint19Version, currentDEarchInstall, currentDEfedoraInstall, currentDEopensuseInstall, currentDEopensuseLeap423Install, currentDEopensuseLeap15Install, currentDEopensuseTWInstall, currentDEubuntuInstall, currentDEmintInstall);
                    } 
                }

            }); // Ends .each loop 

        }); // ends getJSON loop


    });

}