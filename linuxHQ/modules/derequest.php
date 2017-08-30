
<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    // (First Section)
    // What I need: to setup a WHERE statement that will be the DE (I ... think)
    // The display should be say "Display ubuntuInstall..." (ubuntuInstall being a db field) "WHERE deName = 'whatever' "

    // Idea: localDEName is in each DE file and assigned there

    $sshotDE = "SELECT ssde,src FROM sshots WHERE ssde = '$localdename' ";

    // fedora specific
    $fedoraversion =

    // Results
    $sshotDEResults = mysqli_query($conn, $sshotDE) or ('Error querying database');

    $archdb = "SELECT * FROM dearch WHERE dename = '$localdename' ";
    $fedoradb = "SELECT * FROM defedora WHERE dename = '$localdename' ";
    $susedb = "SELECT * FROM deopensuse WHERE dename = '$localdename' ";
    $ubuntudb = "SELECT * FROM deubuntu WHERE dename = '$localdename' ";

    $archresult = mysqli_query($conn, $archdb) or ('Error querying database');
    $fedoraresult = mysqli_query($conn, $fedoradb) or ('Error querying database');
    $suseresult = mysqli_query($conn, $susedb) or ('Error querying database');
    $ubunturesult = mysqli_query($conn, $ubuntudb) or ('Error querying database');

    mysqli_close($conn);

?>
