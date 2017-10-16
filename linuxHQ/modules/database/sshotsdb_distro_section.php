  <?php

  	#Test for SRC to see if it's set 
  	$srcDistroTest = "SELECT src FROM sshots WHERE distroName = '$localdistroName' ";
    $srcDistroQuery = mysqli_query($conn, $srcDistroTest);

  	#Test for HREF to see if it's set 
  	$hrefDistroTest = "SELECT href FROM sshots WHERE distroName = '$localdistroName' ";
    $hrefDistroQuery = mysqli_query($conn, $hrefDistroTest);

  
    $shotSectionDisplay = "distro";
    screenshotcheck('$sshotSectionDisplay');

?>