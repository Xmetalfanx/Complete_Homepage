
<?php
    // Connects to Database
    require $sitePath . '/database/techdbconnect.php';

    $browserdata = "SELECT * FROM mainBrowser ORDER BY addontitle ";
    $browserMainResult = mysqli_query($conn, $browserdata) or ('Error querying database');
    $browserMainDisplay = mysqli_fetch_assoc($browserMainResult);


  	// Specific to the addons in the download catagory
  	$browserAddonsDownload = "SELECT * FROM mainBrowser
  	ORDER BY addontitle
  	GROUP BY catagory";

	  $browserDownloadsResult = mysqli_query($conn, $browserAddonsDownload) or ('Error querying database');
    $browserDownloadDisplay = mysqli_fetch_assoc($browserDownloadsResult);

	  // Software db table
    $totalSoftwareData = "SELECT * FROM overallsoftware ";
    $totalSoftwareResult = mysqli_query($conn, $totalSoftwareData) or ('Error querying database');
    $totalSoftwareDisplay = mysqli_fetch_assoc($totalSoftwareResult);


    // TESTING
    // Trial for Software SORTING

    // localqueryresult is set in each page, ... sometimes two or three in the same page after a clearing
    // at least ... thats the idea

    // After the SPECIFIC sorting by the main catagory based on what the individual file says ... it will be first ORDERED on the page by the SUB-CATAGORY than after that the apptitle

    $SoftwareData = "SELECT * FROM `overallsoftware` WHERE appmaincat = $localmainquery ";

    $SoftwareResult = mysqli_query($conn, $totalSoftwareData) or ('Error querying database');
    $SoftwareDisplay = mysqli_fetch_assoc($totalSoftwareResult);



    mysqli_close($conn);

?>
