let desktopResults = document.getElementById('desktopSection');
let screenshotDIR = "/linuxHQ/screenshots/";

function displayDEOutput() {

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
                    <span class="font-italic">OpenSUSE 15.0: </span>
                    <span class="text-right"> ${currentDESuseL150Version}</span>
                    <br/>
                    <span class="font-italic">OpenSUSE 15.1: </span>
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
                    <span class="font-italic">Mint 18: </span>
                    <span class="text-right">${currentDEMint18Version}</span>
                    <br/>
                    <span class="font-italic">Mint 19: </span>
                    <span class="text-right">${currentDEMint19Version}</span>
                </div>
            </div>


            <div>
                <small>Disclaimer: I decided to list the versions currently in different distro/versions of that distro.
                This means the version of different Desktops that may have SHIPPED WITH the version of the distro listed,
                may not be the same as what I list. </small>
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
                    <li class="font-weight-bold">Leap 15.0 </li>
                        <code class="my-3 p-2">${currentDEopensuseLeap15Install}</code>
                    <li class="font-weight-bold">Leap 15.1 </li>
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
    desktopResults.insertAdjacentHTML("beforeend", deInfoCard);

}


////////////////////////////////////////////////////////////////////
// "main" function

// Where is "data" coming from?
function getDesktopData(data, $localDEName)
{

    $(document).ready(function() {

        fetch('http://xmetal.x10.mx/linuxHQ/json/desktops.json')

            .then(function(data) {
                    return data.json();
            })
            .then(function(data) {

                // Returns data
                console.log(data);

                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        // Maybe string-a-fying too soon
                        stringDataKey=JSON.stringify(data[key]);

                        currentDesktop=data[key];

                        for (var i = 0; i < currentDesktop.length; i++)
                        {
                            desktopName=currentDesktop[i].desktopName;
                            desktopTitle=currentDesktop[i].desktopTitle;

                            // General Info
                            generalInfoDistroFeatures=currentDesktop[i].generalInfo.distrosFeature;
                            desktopCatagory=currentDesktop[i].generalInfo.desktopCatagory;
                            desktopHomepage=currentDesktop[i].generalInfo.desktopHomepage;

                            // Req
                            desktopMemory=currentDesktop[i].requirements.reqMemory;
                            desktopHDDSpace=currentDesktop[i].requirements.reqHDDSpace;
                            desktopProcessor=currentDesktop[i].requirements.reqProcessor;

                            // Screenshots
                            desktopSrc=currentDesktop[i].screenshots.src;
                            desktopTN=currentDesktop[i].screenshots.thumbnail;
                            desktopSSDistro=currentDesktop[i].screenshots.distro;

                            // version info
                            latestVersion=currentDesktop[i].versions.latestVersion;
                            updated=currentDesktop[i].versions.updated;

                                //arch
                                archVersion=currentDesktop[i].versions.arch;

                                // Fedora
                                fedoraF28Version=currentDesktop[i].versions.fedora.f28;
                                fedoraF29Version=currentDesktop[i].versions.fedora.f29;
                                fedoraF30Version=currentDesktop[i].versions.fedora.f30;
                                fedoraRHVersion=currentDesktop[i].versions.fedora.rawhide;

                                // OpenSUSE
                                openSUSELeap150Version=currentDesktop[i].versions.opensuse.leap150;
                                openSUSELeap151Verion=currentDesktop[i].versions.opensuse.leap151;
                                openSUSETWVersion=currentDesktop[i].versions.opensuse.tumbleweed;

                                //Ubuntu
                                    // Mint
                                    mint18Version=currentDesktop[i].versions.ubuntu.mint18;
                                    mint19Version=currentDesktop[i].versions.ubuntu.mint19;

                                    // Ubuntu
                                    ubuntuXeniaVersion=currentDesktop[i].versions.ubuntu.xenial;

                                    ubuntuBionicVersion=currentDesktop[i].versions.ubuntu.bionic;

                                    ubuntuDiscoVersion=currentDesktop[i].versions.ubuntu.disco;

                    // Linux Mint
                    let currentDEMint18Version = ubuntuVerJSON.mint.mint18;
                    let currentDEMint19Version = ubuntuVerJSON.mint.mint19;

                                    if (desktopName == localDEName) {
                                        displayDEOutput(desktopName);
                                    }

                        },

                    }
                }
            });

    });

}