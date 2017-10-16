<?php
    
    require $sitePath . '/database/connect.php';

    $sshotDESrcQuery = "SELECT * FROM sshots WHERE ssde = '$localdename' AND 'src' IS NOT NULL";
    $sshotDESrcResult = mysqli_query($conn, $sshotDESrcQuery) or ('Error querying database');
    $sshotDESrcDisplay = mysqli_fetch_assoc($screenshotDEResult);
 
 ?>