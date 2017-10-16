<?php
    require $sitePath . '/database/connect.php';

    // localdistroName is located in each individual distro page and it is the name
    
    
    $youtube = "SELECT * FROM youtube WHERE distroName = '$localdistroName' ";
    $ytResult = mysqli_query($conn, $youtube) or ('Error querying database');
    $ytDisplay = mysqli_fetch_assoc($ytResult);

    $description = "SELECT * FROM description WHERE distroName = '$localdistroName'";
    $descriptResult = mysqli_query($conn, $description) or ('Error querying database');
    $descriptDisplay = mysqli_fetch_assoc($descriptResult);

    $commonData = "SELECT * FROM commonData WHERE distroName = '$localdistroName' ";
    $commonDataResult = mysqli_query($conn, $commonData) or ('Error querying database');
    $commonDataDisplay = mysqli_fetch_assoc($commonDataResult);

    $recexp = "SELECT * FROM recexp WHERE distroName = '$localdistroName' ";
    $recexpResults = mysqli_query($conn, $recexp) or ('Error querying database');
    $recexpDisplay = mysqli_fetch_assoc($recexpResults);

    // For getting USB Creation info about a distro 
    $usb = "SELECT * FROM usb WHERE distroName = '$localdistroName' ";
    $usbResult = mysqli_query($conn, $usb) or ('Error querying database');
    $usbDisplay = mysqli_fetch_assoc($usbResult);


    mysqli_close($conn);

?>
