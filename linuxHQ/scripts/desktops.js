// var for where to put the output
var desktopResults = document.getElementById('desktopSection');

function displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEGithub, currentDELatestVersion, currentDECatagory, currentDEdistroFeature, currentDEReqMem, currentDEReqHDD, currentDEReqProc, currentDEArchVersion, currentDEF27Version, currentDEF28Version, currentDEFRWVersion, currentDESuseL423Version, currentDESuseL15Version, currentDESuseTWVersion, currentDEMint173Version, currentDEMint18Version, currentDEMint19Version)
{
  
    // Template Literal for output


    // Complete Header 
    const deCardCompleteHeader = `
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="font-weight-bold"> ${currentDETitle}  </h3>
        </div> <!-- Ends card-header class --> 
    
    
    `; 

    const deInfoOutput = `
        <div class="card-text">
            <span class="font-weight-bold">Homepage:</span>
            <a href="${currentDEHomepage}" target="_blank">${currentDETitle}'s Homepage</a><br>
            <span class="font-weight-bold">Github URL: </span>
            <a href="${currentDEGithub}" target="_blank">${currentDETitle} on Github</a>
            <br><br>
        
            <span class="font-weight-bold">Latest Version: </span>${currentDELatestVersion}<br>
            <span class="font-weight-bold">Desktop Catagory: </span>${currentDECatagory}<br>
            <span class="font-weight-bold">Distros That Feature: </span>${currentDEdistroFeature}
            <br><br />

            <italics>Desktop Requirements: </italics>
            
            <ul>
                <li> 
                    <span class="font-weight-bold">Required Processor: </span>${currentDEReqProc}
                </li>
                <li> 
                    <span class="font-weight-bold">Required Memory: </span>${currentDEReqMem}
                </li>
                <li> 
                    <span class="font-weight-bold">Required Hard Drive Space: </span>${currentDEReqHDD}
                </li>
            </ul>

            <br />
        `;

        // used INSIDE the tabs below and not seperately 
        const deVersionsOutput = `
        
        <div class="strong">Versions</div>
            
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

        const deTabInfoOutput = `

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="nav-versions-tab" data-toggle="tab" href="#nav-versions" role="tab" aria-controls="nav-versions" aria-selected="true">Versions</a>

                    <a class="nav-item nav-link" id="nav-install-tab" data-toggle="tab" href="#nav-install" role="tab" aria-controls="nav-install" aria-selected="false">How-To-Install</a>
                    
                </div>
            </nav>
        
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-version-tab">
                ${deVersionsOutput}
                </div>
                <div class="tab-pane fade" id="nav-install" role="tabpanel" aria-labelledby="nav-install-tab">tab 2 content </div>
            </div>
            
            </div> <!-- Closes card-text -->
        </div> <!-- Closes card --> 
            
            `;


        // Var to paste things together as I THINK the hiccup i have now is that each call to insertAdjacentHTML below is a different DIV 
        const deCardBody = `
        ${deInfoOutput}
        ${deTabInfoOutput}
        `; 


        ////////////////////////////////////////////////////////////
        // For test
        localDETest = 'cinnamon';
        /////////////////////////////////////////////////////////////////

        if ( currentDEName == localDETest) {
            desktopResults.insertAdjacentHTML("beforeend", deCardCompleteHeader);
            desktopResults.insertAdjacentHTML("beforeend", deCardBody);
        }


};


////////////////////////////////////////////////////////////////////
// "main" function
function getDesktopData(data) {

    $(document).ready(function() {

    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/desktops.json";

    // Get JSON Data
    $.getJSON(jsonURL, function(data) {

        // For each key value 
        $.each(data, function(key, value) {

            // The key is 'gtk2' or 'qt'
    
            var currentFramework = key;

        
            for (var subFrameworks = 0; subFrameworks < value.length; subFrameworks++) {

                // I need to know value and subFrameworks here 

                var currentDEName = value[subFrameworks].desktopName;
                var currentDETitle = value[subFrameworks].desktopTitle;

                // More Info
                var currentDEHomepage = value[subFrameworks].generalInfo.desktopHomepage;
                var currentDEGithub = value[subFrameworks].generalInfo.desktopGithubURL;
                var currentDELatestVersion = value[subFrameworks].generalInfo.latestVersion;
                var currentDECatagory = value[subFrameworks].generalInfo.desktopCatagory;
                var currentDEdistroFeature = value[subFrameworks].generalInfo.distrofeature;

                // Requirnments
                var currentDEReqMem = value[subFrameworks].requirements.reqMemory;
                var currentDEReqHDD = value[subFrameworks].requirements.reqHDDSpace;
                var currentDEReqProc= value[subFrameworks].requirements.reqProcessor;

                // Versions

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

                    // Ubuntu non-LTS

                
                
            
                ///////////////////////////////////////////////////////////////////////////////////
                
                // Specific assignment just for a test 
                if ( currentDEName = "cinnamon")
                {
                     displayDEOutput(currentDEName, currentDETitle, currentDEHomepage, currentDEGithub, currentDELatestVersion, currentDECatagory, currentDEdistroFeature, currentDEReqMem, currentDEReqHDD, currentDEReqProc, currentDEArchVersion, currentDEF27Version, currentDEF28Version, currentDEFRWVersion, currentDESuseL423Version, currentDESuseL15Version, currentDESuseTWVersion, currentDEMint173Version, currentDEMint18Version, currentDEMint19Version);    

                }
                
            }
    
        });
        
    }); // ends getJSON loop



    });


 
}