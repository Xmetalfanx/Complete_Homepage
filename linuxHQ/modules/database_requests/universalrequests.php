<?php
    // Connects to Database
    require $sitePath . '/database/connect.php';

    $screenshot = "SELECT * FROM sshots ";
    $screenshotResult = mysqli_query($conn, $screenshot) or ('Error querying database');
    $screenshotDisplay = mysqli_fetch_assoc($screenshotResult);
 


 ?>