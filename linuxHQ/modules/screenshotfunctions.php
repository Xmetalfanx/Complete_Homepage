<?php 



    function assignSrcVars()
    {

        ## localdename should be another variable 

        ### Idea - use a var to determine the section ... what "$extraTest is will be based on that "
        if ($sectionVar = 'DE')
        {
            // $sectionTest will be the var name = $localdename 

        }
        elseif ($sectionVar = 'distro')
        {
            // $sectionTest = $distroname

            // NOT 100% AT THE TIME OF TYPING THAT varname above for the distro 

        }


        # Query for when the desktop matches AND SRC is set
        $sshotDistroSrcQuery = "SELECT * 
                                FROM sshots 
                                WHERE $sectionTest AND 'src' IS NOT NULL";

        $sshotDistroSrcResult = mysqli_query($conn, $sshotDistroSrcQuery) or ('Error querying database');
        $sshotDistroSrcDisplay = mysqli_fetch_assoc($sshotDistroSrcResult);

        
        // Start the check for SRC to see if that field contains content 
        srcCheck($extraTest);

    }


    function assignHrefVars()
    {

        ## localdename should be another variable 

        ### Idea - use a var to determine the section ... what "$extraTest is will be based on that "
        if ($sectionVar = 'DE')
        {
            // $sectionTest will be the var name = $localdename 

        }
        elseif ($sectionVar = 'distro')
        {
            // $sectionTest = $distroname

            // NOT 100% AT THE TIME OF TYPING THAT varname above for the distro 

        }

        # Query for when the desktop matches AND HREF is set
        $sshotDistroHrefQuery = "SELECT * 
                                FROM sshots 
                                WHERE $sectionTest AND 'href' IS NOT NULL";                 
        $sshotDistroHrefResult = mysqli_query($conn, $sshotDistroHrefQuery) or ('Error querying database');
        $sshotDistroHrefDisplay = mysqli_fetch_assoc($sshotDistroHrefResult);
       
    }



	# function that checks if there is content in the src (image) field in the database 
	function srcCheck()
	{

		// SQL info is in another file, located at /linuxHQ/modules/screenshotsfunctions.php

	    echo "SQL Query is: " . $srcCheckQuery . "<br /><br />"; 

		
 	# Pass to a universal display function with the var i just declared as an arguement
	universalSShotDisplay($srcCheckQuery, $srcCheckDisplay);

 	# ALSO include a line to clear the var content, later.... or maybe have that in the external functions ... 

	}


	// function to check if the href field isset based on the query 
	function hrefCheck()
	{
		# Placeholder for hrefCheck function content 
	}


	// Universal Display function 
	function universalSShotDisplay($srcCheckQuery, $srcCheckDisplay)
	{

	  # If the screenshot query returns a value (Screenshots themselves), display them 
	  if (isset($srcCheckQuery))
	  {

	    echo "<a href=\"" . $srcCheckResult['src'] . " \" target=\"_blank\" >";
	    echo "<img class=\"d-block img-fluid\" src=\" " . $srcCheckResult['src'] . " \" alt=\" whatever alt tag here \" /> ";
	    echo "</a> <br />";
	  }

   
   	  # If the link-to-screenshots query returns a value, display them 
	  if (isset($hrefCheckQuery))
	  {
	    echo "<a href=\" " . $screenshotDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
	  }



	 # This is what to call from the template files that may get rid of the need for seperate "spreedsheet db .php files" ... the other check and display functions need to be declared first and therefore should be above this 
	 function showScreenshots()
	 {

	 	# Check to see if there is a screenshot graphic in the database
	 	srcCheck();


	 	# Check to see if there is a link to a webpage with screenshot
	 	hrefCheck();


	 	## (Note to self) The universal output function is called from inside the last line or two of the prior (called) Check functions 


	 }








	  ## This would be the spot to put the function that would clear the variables out .,.. inside and after the displaying .... this way the call wouldn't have to be in each SS_DB_....php file 

	}
?>