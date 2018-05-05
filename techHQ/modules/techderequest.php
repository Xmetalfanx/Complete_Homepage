
<?php
    # Connects to Database
    require $sitePath . '/database/techdbconnect.php';


    # Software db table
    $totalSoftwareData = "SELECT * FROM overallsoftware ORDER BY appname";
    $totalSoftwareResult = mysqli_query($conn2, $totalSoftwareData) or ('Error querying database');
    $totalSoftwareDisplay = mysqli_fetch_assoc($totalSoftwareResult);


    // function to sort main and sub catagorys in the software section
  	function sortApps($sortmaincatagory, $sortsubcatagory)
  	{

  		global $localmaincat;
      global $localsubcat;
      global $conn2;
      global $sitePath;

      // If there is no value in localsubcat - Sub catagory
      if (empty($localsubcat))
      {
        $localmaincatquery = "SELECT * FROM `overallsoftware` WHERE appmaincat = '$sortmaincatagory'";
        $localmaincatresult = mysqli_query($conn2, $localmaincatquery) or ('Error querying database');

      }

      // If the subcatagory variable contains a value that was passed from the webpage ... that is if its not NULL
      if (isset($localsubcat))
      {
        $localmaincatquery = "SELECT * FROM `overallsoftware` WHERE appmaincat = '$sortmaincatagory' AND appsubcat = '$sortsubcatagory'";
        $localmaincatresult = mysqli_query($conn2, $localmaincatquery) or ('Error querying database');
      }

  		include $sitePath . '/techHQ/modules/database/software.php';

      // Clearing Variables
      $localsubcat='';

  		}

      #TESTING
      function addontypecheck($addontype)
      {

        global $conn2;
        global $sitePath;
        global $addontype;

        # Specific to the addons in the download catagory
        $browsercatquery = "SELECT * FROM mainBrowser WHERE catagory = '$addontype' ORDER BY addontitle ";
        $browsercatresult = mysqli_query($conn2, $browsercatquery) or ('Error querying database');
        $browsercatdisplay = mysqli_fetch_assoc($browsercatresult);


        include $sitePath . '/techHQ/modules/database/browser.php';

        // Clear Variable
        $addontype = '';
      }

?>
