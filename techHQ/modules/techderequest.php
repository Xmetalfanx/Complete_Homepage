
<?php
    # Connects to Database
    require $sitePath . '/database/techdbconnect.php';

    $browserdata = "SELECT * FROM mainBrowser ORDER BY addontitle ";
    $browserMainResult = mysqli_query($conn2, $browserdata) or ('Error querying database');
    $browserMainDisplay = mysqli_fetch_assoc($browserMainResult);


  	# Specific to the addons in the download catagory
  	$browserAddonsQuery = "SELECT * FROM mainBrowser ORDER BY addontitle";
	  $browserDownloadsResult = mysqli_query($conn2, $browserAddonsQuery) or ('Error querying database');
    $browserDownloadDisplay = mysqli_fetch_assoc($browserDownloadsResult);

    # Software db table
    $totalSoftwareData = "SELECT * FROM overallsoftware ";
    $totalSoftwareResult = mysqli_query($conn2, $totalSoftwareData) or ('Error querying database');
    $totalSoftwareDisplay = mysqli_fetch_assoc($totalSoftwareResult);

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

      // If the subcatagory variable contains a value that was passed from the webpage
      if (isset($localsubcat))
      {
        $localmaincatquery = "SELECT * FROM `overallsoftware` WHERE appmaincat = '$sortmaincatagory' AND appsubcat = '$sortsubcatagory'";
        $localmaincatresult = mysqli_query($conn2, $localmaincatquery) or ('Error querying database');
      }

  		include $sitePath . '/techHQ/modules/database/softwaretest.php';

      // Clearing Variables
      $localsubcat='';

  		}



      #TESTING
      function addontypecheck($addontype)
      {

        global $conn2;
        global $sitePath;
        echo $addontype;

        include $sitePath . '/techHQ/modules/database/browser.php';

      }

?>
