// Contains common variables of functions to use 

   // Setup function ... perhaps move this to a different file? 
    function screenshotcheck
    {
      // a varaible should be set to either sshotDistroDisplay OR sshotDEDisplay so either can get passed - Good idea? 


        if (isset($srcDistroTest))
        {

          echo "<a href=\"" . $sshotDistroDisplay['src'] . " \" target=\"_blank\" >";
          echo "<img class=\"d-block img-fluid\" src=\" " . $sshotDistroDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
          echo "</a> <br />";

        }


        if (isset($hrefDistoTest))
        {

          echo "<a href=\" " . $sshotDistroDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";

        }

    }