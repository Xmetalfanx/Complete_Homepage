// Stuff kept in for example, for now

<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    // (First Section)
    // What I need: to setup a WHERE statement that will be the DE (I ... think)
    // The display should be say "Display ubuntuInstall..." (ubuntuInstall being a db field) "WHERE deName = 'whatever' "
     

    $commonData = "SELECT * FROM commonData WHERE distroName = '$localName' ";


    // Do I need two connections? ... or does the connection open the DB and the individual statements (say SELECT or Mysqli_query) not need more tham one connection

    // Get Results
    $conmondataResults = mysqli_query($conn, $commonData) or ('Error querying database');


    mysqli_close($conn);

?>
