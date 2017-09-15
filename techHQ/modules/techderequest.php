
<?php
    // Connects to Database
    require $sitePath . '/database/techdbconnect.php';

    $browserdata = "SELECT * FROM mainBrowser ORDER BY addontitle ";
    $browserMainResult = mysqli_query($conn, $browserdata) or ('Error querying database');
    $browerMainDisplay = mysqli_fetch_assoc($mainInfoResult);

    // mysqli_free_result($mainInfoDisplay);

    mysqli_close($conn);

?>
