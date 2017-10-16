<?php 

	# Functions for screenshot functions 


	# function that checks if there is content in the src (image) field in the database 
	function srcCheck()
	{


		$localDEName
	  $srcCheckQuery = "SELECT 
	  *
	  FROM 
	  sshots
	  WHERE 
	    	src IS NOT NULL  
	    	AND
	  	    ssde = '$localDEname'";

    $srcCheckResult = mysqli_query($conn, $srcCheckQuery) or ('Error querying database');
    $srcCheckDisplay = mysqli_fetch_assoc($srcCheckResult);
	
 	# Pass to a universal display function with the var i just declared as an arguement
	universalSShotDisplay($srcCheckQuery, $srcCheckDisplay);

 	# ALSO include a line to clear the var content 

	}


	// function to check if the href field isset based on the query 
	function hrefCheck()
	{
	  $hrefCheckQuery = "SELECT 
		  *
		  FROM 
		  sshots
		  WHERE 
			src IS NOT NULL
			AND
		    ssde = '$localDEname' ";
	    
	    
	  	# Pass to a universal display function with the var i just declared as an arguement
		universalSShotDisplay($hrefCheckQuery);

	  	# ALSO include a line to clear the var content 
	}


	// Universal Display function 
	function universalSShotDisplay($srcCheckQuery, $srcCheckDisplay)
	{

		# Test
		echo "<br />srcCheckDisplay: " . $srcCheckDisplay; 

	  if (isset($srcCheckQuery))
	  {

	    echo "<a href=\"" . $srcCheckDisplay['src'] . " \" target=\"_blank\" >";
	    echo "<img class=\"d-block img-fluid\" src=\" " . $srcCheckDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
	    echo "</a> <br />";
	  }

	   
	  elseif (isset($hrefCheckQuery))
	  {
	    echo "<a href=\" " . $screenshotDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
	  }

	}
?>