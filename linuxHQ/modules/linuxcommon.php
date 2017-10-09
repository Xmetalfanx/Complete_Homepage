<?php 

  // Contains common variables of functions to use 


   // Setup function ... perhaps move this to a different file? 
    function screenshotcheck($sshotSectionDisplay)
    {
   
      // allows the use of the variable 
      global $sshotSectionDisplay; 


      // Test to be removed later 
      echo "<br /><br />Test from inside the check FUNCTION: " . $shotSectionDisplay;

      // Determine which of the two sections in Linux HQ the request came from ... Distro or Desktop 


      // THE ISSUE APPEARS to be here ... The alt tag is Showing and the correct if statement is being returned as true on the DE section, HOWEVER the displaying of the query is not working 
      if ($shotSectionDisplay = "DE")
      {
    
        echo "<a href=\"" . $srcDEQuery['src'] . " \" target=\"_blank\" >";
        echo "<img class=\"d-block img-fluid\" src=\" " . $srcDEQuery['src'] . " \" alt=\" whatever alt tag here \" /> ";
        echo "</a> <br />";

      }

      elseif ($shotSectionDisplay = "distro")
      {
        echo "<a href=\" " . $sshotSectionHREFCheck['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
      }

    }

?>