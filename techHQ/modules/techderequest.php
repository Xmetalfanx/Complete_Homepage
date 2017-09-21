
<?php
    # Connects to Database
    require $sitePath . '/database/techdbconnect.php';

    $browserdata = "SELECT * FROM mainBrowser ORDER BY addontitle ";
    $browserMainResult = mysqli_query($conn2, $browserdata) or ('Error querying database');
    $browserMainDisplay = mysqli_fetch_assoc($browserMainResult);


  	# Specific to the addons in the download catagory
  	$browserAddonsDownload = "SELECT * FROM mainBrowser ORDER BY addontitle";

	$browserDownloadsResult = mysqli_query($conn2, $browserAddonsDownload) or ('Error querying database');
    $browserDownloadDisplay = mysqli_fetch_assoc($browserDownloadsResult);


    # Software db table
    $totalSoftwareData = "SELECT * FROM overallsoftware ";
    $totalSoftwareResult = mysqli_query($conn2, $totalSoftwareData) or ('Error querying database');
    $totalSoftwareDisplay = mysqli_fetch_assoc($totalSoftwareResult);








    #TESTING

	function sortAppsMain($sortmaincatagory)
	{

		global $localmaincat;
		global $conn2;
		global $sitePath;

		// echo "<hr /><br />Inside sorting function";

		// query attempt
		// $localmaincatquery = "SELECT appmaincat FROM overallsoftware WHERE appmaincat = $sortmaincatagory ";
    // $localmaincatquery = "SELECT appmaincat FROM overallsoftware WHERE appmaincat = internet ";


    $localmaincatquery = "SELECT * FROM `overallsoftware` WHERE appmaincat = '$sortmaincatagory'";

    // JUST A TEST for the output
		// echo "<br /><br />localmaincatquery is: $localmaincatquery";

		$localmaincatresult = mysqli_query($conn2, $localmaincatquery) or ('Error querying database');

    // Just a test for the output
    // echo "<br />localmaincatresult:  $localmaincatresult ";

		include $sitePath . '/techHQ/modules/database/softwaretest.php';

		}


?>
