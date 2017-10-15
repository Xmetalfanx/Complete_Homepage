<?php 

	# Functions for screenshot functions 


	# function that checks if there is content in the src (image) field in the database 
	function srcCheck()
	{

	  $srcCheckQuery = "SELECT 
	  *
	  FROM 
	  <sstable here> 
	  WHERE 
	    	src IS NOT NULL  
	    	AND
	    	
	    	# USE a variable here like extraCheck or something for what is below in WHERE 
	    	ssde = '$localDEname'";


    $srcCheckResult = mysqli_query($conn, $srcCheckQuery) or ('Error querying database');
    $srcCheckDisplay = mysqli_fetch_assoc($srcCheckResult);
	
	
 	# Pass to a universal display function with the var i just declared as an arguement
	universalSShotDisplay($srcCheckQuery);

 	# ALSO include a line to clear the var content 

	}


	// function to check if the href field isset based on the query 
	function hrefCheck()
	{
	 

	  $hrefCheckQuery = "SELECT 
		  *
		  FROM 
		  <sstable here> 
		  WHERE 
			src IS NOT NULL
			AND

			# consider if i can make this a varaible later 
		    ssde = '$localDEname'";
	    
	    
	  	# Pass to a universal display function with the var i just declared as an arguement
		universalSShotDisplay($hrefCheckQuery);

	  	# ALSO include a line to clear the var content 
	}


	// Universal Display function 
	function universalSShotDisplay($srcCheckQuery)
	{

	  if (isset($srcCheckQuery))
	  {

	    echo "<a href=\"" . $srcCheckDisplay['src'] . " \" target=\"_blank\" >";
	    echo "<img class=\"d-block img-fluid\" src=\" " . $srcCheckDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
	    echo "</a> <br />";
	  }

	   
	  elseif (isset($srcDisplay))
	  {
	    echo "<a href=\" " . $screenshotDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
	  }

	}
?>