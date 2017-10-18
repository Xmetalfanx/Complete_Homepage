<?php 

	# function that checks if there is content in the src (image) field in the database 
	function srcCheck($extraTest)
	{

		// SQL info is in another file 

	    echo "SQL Query is: " . $srcCheckQuery . "<br /><br />"; 

		
 	# Pass to a universal display function with the var i just declared as an arguement
	universalSShotDisplay($srcCheckQuery, $srcCheckDisplay);

 	# ALSO include a line to clear the var content 

	}


	// function to check if the href field isset based on the query 
	function hrefCheck()
	{
	  	# Variables for SQL are in a universal SQL file with all the variables 


	  	# ALSO include a line to clear the var content 
	}


	// Universal Display function 
	function universalSShotDisplay($srcCheckQuery, $srcCheckDisplay)
	{


		  if (isset($srcCheckQuery))
		  {

		    echo "<a href=\"" . $srcCheckResult['src'] . " \" target=\"_blank\" >";
		    echo "<img class=\"d-block img-fluid\" src=\" " . $srcCheckResult['src'] . " \" alt=\" whatever alt tag here \" /> ";
		    echo "</a> <br />";
		  }

	   
		  elseif (isset($hrefCheckQuery))
		  {
		    echo "<a href=\" " . $screenshotDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
		  }

	}
?>