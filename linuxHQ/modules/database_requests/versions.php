<?php

    // Connects to Database
    require $sitePath . '/database/connect.php';

    // Idea: localDEName is in each DE file and assigned there

    $archVer = "SELECT pacmanversion FROM dearch WHERE dename = '$localdename' ";
    // TODO: Get more specific with the fedora request 
    $fedoraVer = "SELECT * FROM defedora WHERE dename = '$localdename' ";
    $suseVer = "SELECT leap422version,leap423version,twversion FROM deOpenSuse WHERE dename = '$localdename' ";

    
    $ubuntuVer = "SELECT * FROM deubuntu WHERE dename = '$localdename' ";

    $archVerResult = mysqli_query($conn, $archVer);
    $archVerDisplay=mysqli_fetch_assoc($archVerResult);

    $fedoraVerResult = mysqli_query($conn, $fedoraVer);
    $fedoraVerDisplay=mysqli_fetch_assoc($fedoraVerResult);


?>
