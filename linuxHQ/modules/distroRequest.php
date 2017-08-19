<?php
    require $sitePath . '/database/connect.php';

    // Creates Query

    // localName is located in each individual distro page and it is the name

    $commonData = "SELECT * FROM commonData WHERE distroName = '$localName' ";
    $usb = "SELECT * FROM usb WHERE distroName = '$localName' ";
    $sshot = "SELECT * FROM sshots WHERE distroName = '$localName' ";

    // Do I need two connections? ... or does the connection open the DB and the individual statements (say SELECT or Mysqli_query) not need more tham one connection

    // Get Results
    $conmondataResults = mysqli_query($conn, $commonData) or ('Error querying database');

    $usbResults = mysqli_query($conn, $usb) or ('Error querying database');

    $sshotResults = mysqli_query($conn, $sshot) or ('Error querying database');


    mysqli_close($conn);

?>
