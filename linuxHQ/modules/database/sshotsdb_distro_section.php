  <?php

  	#Test for SRC to see if it's set 
  	$srcDistroTest = "SELECT src FROM sshots WHERE distroName = '$localdistroName' ";
    $srcDistroQuery = mysqli_query($conn, $srcDistroTest);


  	#Test for HREF to see if it's set 
  	$hrefDistroTest = "SELECT href FROM sshots WHERE distroName = '$localdistroName' ";
    $hrefDistroQuery = mysqli_query($conn, $hrefDistroTest);

    

    // THE IDEA is to pass this to the function thatchecks what variables are set in the DB table
      // THIS SHOULD BE CRITICAL to outputting the correct data 
          // IDEA: the same function can display data from either section if this is set correctly 
    $shotSectionDisplay = "$sshotDistroDisplay"


    screenshotcheck($sshotSectionDisplay);


?>