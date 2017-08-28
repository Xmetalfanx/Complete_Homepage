
<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    // (First Section)
    // What I need: to setup a WHERE statement that will be the DE (I ... think)
    // The display should be say "Display ubuntuInstall..." (ubuntuInstall being a db field) "WHERE deName = 'whatever' "

    // Idea: localDEName is in each DE file and assigned there

    $ubuntuInstall = "SELECT ubuntuInstall FROM installDE WhERE deName = '$localdename' ";
    $sshotDE = "SELECT ssde,src FROM sshots WHERE ssde = '$localdename' ";

    // arch specific
    $archVer = "SELECT pacmanversion FROM dearch WHERE dename = '$localdename' ";
    $archInstall = "SELECT install FROM dearch WHERE dename = '$localdename' ";

    // fedora specific
    $fedoraVersion = "SELECT f25version,f26version,rawhideversion FROM defedora WHERE dename = '$localdename' ";

    //  Results
    $ubuntuInstallResult = mysqli_query($conn, $ubuntuInstall) or ('Error querying database');
    $sshotDEResults = mysqli_query($conn, $sshotDE) or ('Error querying database');

    #arch results
    $archVerResult = mysqli_query($conn, $archVer) or ('Error querying database');
    $archinstallResult = mysqli_query($conn, $archInstall) or ('Error querying database');

    #fedora results
    $fedoraVerResults = mysqli_query($conn, $fedoraVersion) or ('Error querying database');

    mysqli_close($conn);

?>
