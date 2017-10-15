<?php 

	# Functions for screenshot functions 


	# function that checks if there is content in the src (image) field in the database 
	function srcCheck()
	{

	  $srcDisplay = "SELECT 
	  *
	  FROM 
	  <sstable here> 
	  WHERE 
	    	src IS NOT NULL  
	    	AND
	    	
	    	# Consider using a variable here like extraCheck or something for what is below in WHERE 
	    	ssde = '$localDEname'";

	    
	    
		 	# Pass to a universal display function with the var i just declared as an arguement
			universalSShotDisplay($srcDisplay);

		 	# ALSO include a line to clear the var content 

	}


	// function to check if the href field isset based on the query 
	function hrefCheck()
	{
	 

	  $hrefDisplay = "SELECT 
	  *
	  FROM 
	  <sstable here> 
	  WHERE 
		src IS NOT NULL
		AND

		# consider if i can make this a varaible later 
	    ssde = '$localDEname'";
	    
	    
	  	# Pass to a universal display function with the var i just declared as an arguement
		universalSShotDisplay($srcDisplay);

	  	# ALSO include a line to clear the var content 
	}


	// Universal Display function 
	function universalSShotDisplay($srcDisplay)
	{

	  if (isset($srcDisplay))
	  {

	    echo "<a href=\"" . $screenshotDisplay['src'] . " \" target=\"_blank\" >";
	    echo "<img class=\"d-block img-fluid\" src=\" " . $screenshotDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
	    echo "</a> <br />";
	  }

	   
	  elseif (isset($srcDisplay))
	  {
	    echo "<a href=\" " . $screenshotDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
	  }

	}
?>