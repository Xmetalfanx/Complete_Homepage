<?php

    #Test for SRC to see if it's set 
    $srcDETest = "SELECT * FROM sshots WHERE ssde = '$localdename' ";
    $srcDistroQuery = mysqli_query($conn, $srcDistroTest);


    #Test for HREF to see if it's set 
    $hrefDETest = "SELECT * FROM sshots WHERE ssde = '$localdename' ";
    $hrefDEQuery = mysqli_query($conn, $hrefDistroTest);


    // THE IDEA is to pass this to the function thatchecks what variables are set in the DB table
      // THIS SHOULD BE CRITICAL to outputting the correct data 
          // IDEA: the same function can display data from either section if this is set correctly 
    $shotSectionDisplay = "$sshotDEDisplay"


    screenshotcheck($sshotSectionDisplay);

 
?>