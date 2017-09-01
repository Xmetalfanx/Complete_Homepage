
<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    // Idea: localDEName is in each DE file and assigned there

    $sshotDE = "SELECT ssde,src FROM sshots WHERE ssde = '$localdename' ";
    $sshotDEResult = mysqli_query($conn, $sshotDE) or ('Error querying database');
    $sshotDisplay=mysqli_fetch_assoc($sshotDEResult);

    mysqli_free_result($sshotDEResult);

    // mysqli_close($conn);

     $mainInfo = "SELECT * FROM mainDEInfo WHERE ssde = '$localdename' ";
     $mainInfoResult = mysqli_query($conn, $mainInfo) or ('Error querying database');
     $mainInfoDisplay =mysqli_fetch_assoc($mainInfoResult);

     mysqli_free_result($mainInfoResult);

     // mysqli_close($conn);

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
