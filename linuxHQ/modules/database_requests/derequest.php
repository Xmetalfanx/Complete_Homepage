
<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    $mainInfo = "SELECT * FROM mainDEInfo WHERE dename = '$localdename' ";
    $mainInfoResult = mysqli_query($conn, $mainInfo) or ('Error querying database');
    $mainInfoDisplay = mysqli_fetch_assoc($mainInfoResult);
    // mysqli_free_result($mainInfoDisplay);


    $reqInfo = "SELECT * FROM dereq WHERE dename = '$localdename' ";
    $reqInfoResult = mysqli_query($conn, $reqInfo) or ('Error querying database');
    $reqInfoDisplay = mysqli_fetch_assoc($reqInfoResult);
    // mysqli_free_result($reqInfoDisplay);

    $softwareInfo = "SELECT * FROM desoftware WHERE dename = '$localdename' ";
    $softwareResult = mysqli_query($conn, $softwareInfo) or ('Error querying database');
    $softwareDisplay = mysqli_fetch_assoc($softwareResult);


    // Arch
    $archdb = "SELECT * FROM dearch WHERE dename = '$localdename' ";
    $archresult = mysqli_query($conn, $archdb) or ('Error querying database');
    $archDisplay= mysqli_fetch_assoc($archresult);


    // Fedora 
    $fedoradb = "SELECT * FROM defedora WHERE dename = '$localdename' ";
    $fedoraresult = mysqli_query($conn, $fedoradb) or ('Error querying database');
    $fedoraDisplay = mysqli_fetch_assoc($fedoraresult);


    $ubuntudb = "SELECT * FROM deubuntu WHERE dename = '$localdename' ";
    $ubunturesult = mysqli_query($conn, $ubuntudb) or ('Error querying database');
    $ubuntuDisplay= mysqli_fetch_assoc($ubunturesult);


    // OpenSuse 
    $susedb = "SELECT * FROM deopensuse WHERE dename = '$localdename' ";
    $suseresult = mysqli_query($conn, $susedb) or ('Error querying database');
    $suseDisplay= mysqli_fetch_assoc($suseresult);


    
    $sshotDE = "SELECT ssde,src FROM sshots WHERE ssde = '$localdename' ";
    $sshotDEResult = mysqli_query($conn, $sshotDE) or ('Error querying database');
    $sshotDisplay = mysqli_fetch_assoc($sshotDEResult);
    // mysqli_free_result($sshotDEResult);



    mysqli_close($conn);

?>
