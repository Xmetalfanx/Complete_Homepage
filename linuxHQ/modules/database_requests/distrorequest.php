<?php
    require $sitePath . '/database/connect.php';

    // localdistroName is located in each individual distro page and it is the name
    
    $youtube = "SELECT * FROM youtube WHERE distroName = '$localdistroName' ";
    $description = "SELECT * FROM description WHERE distroName = '$localdistroName'";

    // Get Results
    $ytResult = mysqli_query($conn, $youtube) or ('Error querying database');
    $descriptResult = mysqli_query($conn, $description) or ('Error querying database');


    // For getting common data about a distro 
    $commonData = "SELECT * FROM commonData WHERE distroName = '$localdistroName' ";
    $conmondataResults = mysqli_query($conn, $commonData) or ('Error querying database');


  

    // For getting info on if i would recommend a distro and if-so, to who 
    $recexp = "SELECT * FROM recexp WHERE distroName = '$localdistroName' ";
    $recexpResults = mysqli_query($conn, $recexp) or ('Error querying database');



    mysqli_close($conn);

?>
