<?php 

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



	  ## This would be the spot to put the function that would clear the variables out .,.. inside and after the displaying .... this way the call wouldn't have to be in each SS_DB_....php file 

	}
?>