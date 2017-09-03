
<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    $mainInfo = "SELECT * FROM mainDEInfo WHERE dename = '$localdename' ";
    $mainInfoResult = mysqli_query($conn, $mainInfo) or ('Error querying database');
    $mainInfoDisplay = mysqli_fetch_assoc($mainInfoResult);

    // mysqli_free_result($mainInfoDisplay);

    $reqInfo = "SELECT * FROM dereq WHERE dename = '$localdename' ";
    $reqResult = mysqli_query($conn, $reqInfo) or ('Error querying database');
    $reqInfoDisplay = mysqli_fetch_assoc($reqResult);

    // mysqli_free_result($reqInfoDisplay);

    $sshotDE = "SELECT ssde,src FROM sshots WHERE ssde = '$localdename' ";
    $sshotDEResult = mysqli_query($conn, $sshotDE) or ('Error querying database');
    $sshotDisplay = mysqli_fetch_assoc($sshotDEResult);


    $sshottest = "SELECT ssde,src FROM sshots WHERE ssde = '$localdename' ";
    $sshottestresult = mysqli_query($conn, $sshottest) or ('Error querying database');
    $sshotmanydisplay = mysqli_fetch_assoc($sshottestresult);


    // mysqli_free_result($sshotDEResult);

    $softwareInfo = "SELECT * FROM desoftware WHERE dename = '$localdename' ";
    $softwareResult = mysqli_query($conn, $softwareInfo) or ('Error querying database');
    $softwareDisplay = mysqli_fetch_assoc($softwareResult);


     $archdb = "SELECT * FROM dearch WHERE dename = '$localdename' ";
     $fedoradb = "SELECT * FROM defedora WHERE dename = '$localdename' ";
     $susedb = "SELECT * FROM deopensuse WHERE dename = '$localdename' ";
     $ubuntudb = "SELECT * FROM deubuntu WHERE dename = '$localdename' ";

     $archresult = mysqli_query($conn, $archdb) or ('Error querying database');
     $archDisplay= mysqli_fetch_assoc($archresult);

     $fedoraresult = mysqli_query($conn, $fedoradb) or ('Error querying database');
     $fedoraDisplay= mysqli_fetch_assoc($archresult);

     $suseresult = mysqli_query($conn, $susedb) or ('Error querying database');
     $suseDisplay= mysqli_fetch_assoc($archresult);

     $ubunturesult = mysqli_query($conn, $ubuntudb) or ('Error querying database');
     $ubuntuDisplay= mysqli_fetch_assoc($archresult);



    mysqli_close($conn);

?>
