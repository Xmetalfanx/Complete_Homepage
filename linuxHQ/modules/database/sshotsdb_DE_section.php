<?php



    // 



    $DETest = "SELECT src,href FROM sshots WHERE ssde = '$localdename' ";
    $DEQuery = mysqli_query($conn, $srcDETest);







    // THE IDEA is to pass this to the function thatchecks what variables are set in the DB table
      // THIS SHOULD BE CRITICAL to outputting the correct data 
          // IDEA: the same function can display data from either section if this is set correctly 
    $sshotSectionDisplay = "DE";

    screenshotcheck('$sshotSectionDisplay');

?>