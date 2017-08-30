
<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    // (First Section)
    // What I need: to setup a WHERE statement that will be the DE (I ... think)
    // The display should be say "Display ubuntuInstall..." (ubuntuInstall being a db field) "WHERE deName = 'whatever' "

    // Idea: localDEName is in each DE file and assigned there

    $sshotDE = "SELECT ssde,src FROM sshots WHERE ssde = '$localdename' ";

    // arch specific
    $archversion = "SELECT pacmanversion FROM dearch WHERE dename = '$localdename' ";
    $archInstall = "SELECT install FROM dearch WHERE dename = '$localdename' ";

    // fedora specific
    $fedoraversion = "SELECT f25version,f26version,rawhideversion FROM defedora WHERE dename = '$localdename' ";

    // opensuse specific
    $opensuseversion = "SELECT * FROM deopensuse WHERE dename = '$localdename' ";

    // Ubuntu Specific
    $ubuntuversion = "SELECT lts16040ver,lts16043ver,1704ver,1710ver FROM deubuntu WHERE dename = '$localdename' ";


    // Results
    $sshotDEResults = mysqli_query($conn, $sshotDE) or ('Error querying database');

    #arch results
    $archVerResult = mysqli_query($conn, $archversion) or ('Error querying database');
    $archinstallResult = mysqli_query($conn, $archInstall) or ('Error querying database');

    #fedora results
    $fedoraVerResults = mysqli_query($conn, $fedoraversion) or ('Error querying database');

    # Opensuse Result
    $suseVerResults = mysqli_query($conn, $opensuseversion) or ('Error querying database');

    $ubuntuVerResults = mysqli_query($conn, $ubuntuversion) or ('Error querying database');

    mysqli_close($conn);

?>
