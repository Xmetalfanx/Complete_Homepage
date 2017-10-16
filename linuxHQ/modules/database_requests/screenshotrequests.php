<?php
    
    require $sitePath . '/database/connect.php';

    # Query for when the desktop matches AND SRC is set
    $sshotDESrcQuery = "SELECT * FROM sshots WHERE ssde = '$localdename' AND 'src' IS NOT NULL";
    $sshotDESrcResult = mysqli_query($conn, $sshotDESrcQuery) or ('Error querying database');
    $sshotDESrcDisplay = mysqli_fetch_assoc($sshotDESrcResult);

    # Query for when the desktop matches AND HREF is set
    $sshotDEHrefQuery = "SELECT * FROM sshots WHERE ssde = '$localdename' AND 'href' IS NOT NULL";
    $sshotDEHrefResult = mysqli_query($conn, $sshotDEHrefQuery) or ('Error querying database');
    $sshotDEHrefDisplay = mysqli_fetch_assoc($sshotDEHrefResult);
 
 
 ?>