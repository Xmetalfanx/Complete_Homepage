
<?php
    // Connects to Database
    require $sitePath . '/database/techdbconnect.php';

    $browserdata = "SELECT * FROM mainBrowser ORDER BY addontitle ";
    $browserMainResult = mysqli_query($conn, $browserdata) or ('Error querying database');
    $browserMainDisplay = mysqli_fetch_assoc($browserMainResult);


	// Specific to the addons in the download catagory 
	$browserAddonsDownload = "SELECT * FROM mainBrowser ORDER BY addontitle GROUP BY catagory";
	$browserDownloadsResult = mysqli_query($conn, $browserAddonsDownload) or ('Error querying database');
    $browserDownloadDisplay = mysqli_fetch_assoc($browserDownloadsResult);


	// Software db table 
    $totalSoftwareData = "SELECT * FROM overallsoftware ORDER BY `appmaincat` ";
    $totalSoftwareResult = mysqli_query($conn, $totalSoftwareData) or ('Error querying database');
    $browserMainDisplay = mysqli_fetch_assoc($totalSoftwareResult);


    mysqli_close($conn);

?>
