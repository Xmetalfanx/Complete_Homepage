<?php 

    include $sitePath . '/database/connect.php'; 
    
    # Checks to see what section the request came from ... this will be expanded, later
    function sectionCheck()
    {

        # Determine what section is being used 
        if ($sectionVar = 'DE')
        {
            $sectionTest = $localdename;
        }

        elseif ($sectionVar = 'distro')
        {
            $sectionTest = $localdistroname;
        }

        return $sectionTest;

    }

      
    # based on the section the request came from, do some SQL statements
    function assignSrcVars()
    {

        # Query for when the desktop matches AND SRC is set
        $sshotDistroSrcQuery = "SELECT * 
                                FROM sshots 
                                WHERE $sectionTest AND 'src' IS NOT NULL";

        $sshotDistroSrcResult = mysqli_query($conn, $sshotDistroSrcQuery) or ('Error querying database');
        $sshotDistroSrcDisplay = mysqli_fetch_assoc($sshotDistroSrcResult);


        # NOT sure what variable needs to be returned so i can send it to the display function 

        
    }


    # based on the section the request came from, do some SQL statements
    function assignHrefVars()
    {

        # Query for when the desktop matches AND HREF is set
        $sshotDistroHrefQuery = "SELECT * 
                                FROM sshots 
                                WHERE $sectionTest AND 'href' IS NOT NULL";                 
        $sshotDistroHrefResult = mysqli_query($conn, $sshotDistroHrefQuery) or ('Error querying database');
        $sshotDistroHrefDisplay = mysqli_fetch_assoc($sshotDistroHrefResult);

        # NOT sure what variable needs to be returned so i can send it to the display function 

    }



    // Universal Display function 
    function universalSShotDisplay($sshotDistroSrcDisplay)
    {

        # TEST ONLY ... THIS WILL NOT STAY 
        echo "<br /> (Inside output function) sshotDistroSrcDisplay: " . $sshotDistroSrcDisplay['src'];


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