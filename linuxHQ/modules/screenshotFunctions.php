<?php 
    
    ## Test commenting this out since i started using "global" in the functions 
    #include $sitePath . '/database/connect.php'; 
    
    # Checks to see what section the request came from ... this will be expanded, later
    function sectionCheck()
    {

        # Determine what section is being used 
        if ($sectionVar = 'DE')
        {
             
             $sectionTest = "ssde = $localdename";
        }

        elseif ($sectionVar = 'distro')
        {
            
            $sectionTest = "distroName = $localdistroname";
        }

    }

      
    # based on the section the request came from, do some SQL statements
    function assignSrcVars()
    {

        global $conn; 
        global $sectionTest;


        # Query for when the desktop matches AND SRC is set
        $sshotDistroSrcQuery = "SELECT * 
                                FROM sshots 
                                WHERE" . $sectionTest . "AND 'src' IS NOT NULL";

        $sshotDistroSrcResult = mysqli_query($conn, $sshotDistroSrcQuery) or ('Error querying database');
        $sshotDistroSrcDisplay = mysqli_fetch_assoc($sshotDistroSrcResult);

        echo "Inside assignSrcVars function: " . $sshotDistroSrcQuery;


        echo "<br /><br /> Below is Display:<br />";

        echo $sshotDistroSrcDisplay['src'];


        echo "<br /><hr />";

        # Displays content - really want this outside of this function but this is here to test for now


        universalSShotDisplay($sshotDistroSrcResult);
    }


    # based on the section the request came from, do some SQL statements
    function assignHrefVars()
    {

        global $conn; 
        global $sectionTest;


        # Query for when the desktop matches AND HREF is set
        $sshotDistroHrefQuery = "SELECT * 
                                FROM sshots 
                                WHERE 'href' IS NOT NULL";                 
        $sshotDistroHrefResult = mysqli_query($conn, $sshotDistroHrefQuery) or ('Error querying database');
        $sshotDistroHrefDisplay = mysqli_fetch_assoc($sshotDistroHrefResult);


        echo "TEST INSIDE assignSrcVars function: " . $sshotDistroSrcDisplay['src'];

        # NOT sure what variable needs to be returned so i can send it to the display function 

    }



    // Universal Display function 
    function universalSShotDisplay($sshotDistroSrcResult)
    {

        global $sshotDistroSrcResult;


        # TEST ONLY ... THIS WILL NOT STAY 
        echo "<br /> (Inside output function): " . $sshotDistroSrcDisplay;


      # If the screenshot query returns a value (Screenshots themselves), display them 
      if (isset($sshotDistroSrcDisplay))
      {

        echo "<a href=\"" . $sshotDistroSrcDisplay['src'] . " \" target=\"_blank\" >";
        echo "<img class=\"d-block img-fluid\" src=\" " . $sshotDistroSrcDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
        echo "</a> <br />";
      }

   
      # If the link-to-screenshots query returns a value, display them 
      if (isset($hrefCheckQuery))
      {
        echo "<a href=\" " . $screenshotDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
      }
    }


    ## This would be the spot to put the function that would clear the variables out .,.. inside and after the displaying .... this way the call wouldn't have to be in each SS_DB_....php file 

?>