<?php 


	# Functions for screenshot functions 
	## KEEP THIS FILE but so far I am still TRYING To get this to work ... this may not be in-use all the time until I figure out what I am doing wrong 

	# function that checks if there is content in the src (image) field in the database 
	function srcCheck($extraTest)
	{

		
		$srcCheckQuery = "SELECT 
		*
		FROM 
		sshots
		WHERE 
		src IS NOT NULL  
		AND
		$extraTest ";

	    $srcCheckResult = mysqli_query($conn, $srcCheckQuery) or ('Error querying database');
	    $srcCheckDisplay = mysqli_fetch_assoc($srcCheckResult);


	    echo "SQL Query is: " . $srcCheckQuery . "<br /><br />"; 

		
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
		distroname = '$localdistroname' ";
	    
	  	# Pass to a universal display function with the var i just declared as an arguement
		universalSShotDisplay($hrefCheckQuery);

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