<?php


    #Test for SRC to see if it's set 
    $srcDETest = "SELECT src FROM sshots WHERE ssde = '$localdename' ";
    $srcDEQuery = mysqli_query($conn, $srcDETest);


    #Test for HREF to see if it's set 
    $hrefDETest = "SELECT * FROM sshots WHERE ssde = '$localdename' ";
    $hrefDEQuery = mysqli_query($conn, $hrefDETest);


    // THE IDEA is to pass this to the function thatchecks what variables are set in the DB table
      // THIS SHOULD BE CRITICAL to outputting the correct data 
          // IDEA: the same function can display data from either section if this is set correctly 
    $sshotSectionDisplay = "DE";

    echo "<br />" . $sshotSectionDisplay;


    screenshotcheck($sshotSectionDisplay);

 
?>