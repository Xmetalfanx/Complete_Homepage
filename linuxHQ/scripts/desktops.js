// var for where to put the output
var desktopResults = document.getElementById('desktopSection');

// Testing new way of going through each DE framework section and then displaying EVERYTHING (for now)
function newLoopTest(data) {

    // data = the complete JSON

    // Outer loop
    $.each(data, function(key, value) {

        // The key is 'gtk2' or 'qt'
        // the value is the framework's "sub-json" to so speak
        var currentFramework = key;

        // subFramework is for the number of the object in the individual Framework (? what term i mean here)
        // example - subframework ... (starting at 0 and not 1) would have 0, 1, and 2 for
        for (var subFrameworks = 0; subFrameworks < value.length; subFrameworks++) {

            //////////////////////////////////////////////////////////////////////////
            // DECLARE VARIABLES
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


            ////////////////////////////////////////////////////////////////////////////

            // Template Literal for output
            const deNameOutput = `
                Desktop Name: <strong>${currentDETitle}</strong><br />
            `;
            
            const deMoreInfoOutput = `
        
                <br />
                Homepage:<a href="${currentDEHomepage}" target="_blank"> ${currentDETitle}'s Homepage </a><br />
                Github URL: <a href="${currentDEGithub}" target="_blank"> ${currentDETitle} on Github </a><br />
                Latest Version: ${currentDELatestVersion}<br /> 
                Desktop Catagory: ${currentDECatagory} <br />
                Distros That Feature: ${currentDEdistroFeature}
                <br />
                `;

            const deReqOutput = `
                <italics> Desktop Requirements: </italics>
                <ul>
                    <li>Required Processor: ${currentDEReqProc} </li>
                    <li>Required Memory: ${currentDEReqMem}</li>
                    <li>Required Hard Drive Space: ${currentDEReqHDD}</li>
                </ul><br />
                `;

            const versionsOutput = `
            
            <div class="strong">Versions
                <div class="font-italic">
                    Arch: 
                    ${currentDEArchVersion}
                </div>
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

            
            <hr />
            `;

            // testing
             var localDEName = "cinnamon";

            
            // Display Output

            console.log("localDEName:" + localDEName);

            if (currentDEName == localDEName)
            {
                desktopResults.insertAdjacentHTML("beforeend", deNameOutput);
                desktopResults.insertAdjacentHTML("beforeend", deMoreInfoOutput);
                desktopResults.insertAdjacentHTML("beforeend", deReqOutput);
                desktopResults.insertAdjacentHTML("beforeend", versionsOutput);
            }

        }

    });
}

// "main" function
function getDesktopData(desktopData) {
    jsonURL = "http://xmetal.x10.mx/linuxHQ/json/desktops.json";

    // Get JSON Data
    $.getJSON(jsonURL, function(data) {

        newLoopTest(data);

    }); // ends getJSON loop
}