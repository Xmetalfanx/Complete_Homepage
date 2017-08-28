<?php
    require $sitePath . '/database/connect.php';

    // Creates Query

    // localName is located in each individual distro page and it is the name

    $commonData = "SELECT * FROM commonData WHERE distroName = '$localName' ";
    $usb = "SELECT * FROM usb WHERE distroName = '$localName' ";
    $sshot = "SELECT * FROM sshots WHERE distroName = '$localName' ";
    $recexp = "SELECT * FROM recexp WHERE distroName = '$localName' ";
    $youtube = "SELECT * FROM youtube WHERE distroName = '$localName' ";
    $description = "SELECT * FROM description WHERE distroName = '$localName' ";


    // Do I need two connections? ... or does the connection open the DB and the individual statements (say SELECT or Mysqli_query) not need more tham one connection

    // Get Results
    $conmondataResults = mysqli_query($conn, $commonData) or ('Error querying database');
    $usbResults = mysqli_query($conn, $usb) or ('Error querying database');
    $sshotResults = mysqli_query($conn, $sshot) or ('Error querying database');
    $recexpResults = mysqli_query($conn, $recexp) or ('Error querying database');
    $ytResult = mysqli_query($conn, $youtube) or ('Error querying database');
    $descriptResult = mysqli_query($conn, $description) or ('Error querying database');

    mysqli_close($conn);

?>
