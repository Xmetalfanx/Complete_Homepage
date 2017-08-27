
<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    // (First Section)
    // What I need: to setup a WHERE statement that will be the DE (I ... think)
    // The display should be say "Display ubuntuInstall..." (ubuntuInstall being a db field) "WHERE deName = 'whatever' "

    // Idea: localDEName is in each DE file and assigned there

    $ubuntuInstall = "SELECT ubuntuInstall FROM installDE WhERE deName = '$localdename' ";
    $sshotDE = "SELECT ssde,src FROM sshots WHERE ssde = '$localdename' ";


    // Do I need two connections? ... or does the connection open the DB and the individual statements (say SELECT or Mysqli_query) not need more tham one connection

    // Get Results
    $ubuntuInstallResult = mysqli_query($conn, $ubuntuInstall) or ('Error querying database');
    $sshotDEResults = mysqli_query($conn, $sshotDE) or ('Error querying database');


    mysqli_close($conn);

?>
