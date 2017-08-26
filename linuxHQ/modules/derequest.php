// Stuff kept in for example, for now

<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    // (First Section)
    // What I need: to setup a WHERE statement that will be the DE (I ... think)
    // The display should be say "Display ubuntuInstall..." (ubuntuInstall being a db field) "WHERE deName = 'whatever' "

    // Idea: localDEName is in each DE file and assigned there

    $ubuntuInstall = "SELECT ubuntuInstall FROM installDE WhERE deName = '$localDEName' ";


    // Do I need two connections? ... or does the connection open the DB and the individual statements (say SELECT or Mysqli_query) not need more tham one connection

    // Get Results
    $ubuntuInstallResult = mysqli_query($conn, $ubuntuInstall) or ('Error querying database');


    mysqli_close($conn);

?>
