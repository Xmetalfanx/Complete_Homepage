<?php 

// Contains common variables of functions to use 

// Create function that is called in the other function below
function screenshotsDisplay($sshotTEST)
{

  global $sshotSectionDisplay;


  // THE DISPLAY VARIABLES BELOW INSIDE the if statements have to be the same no matter what section the request comes from 



  // If the after the query, there is a value in the SRC field 
  if ($shotSectionDisplay = "DE")
  {

    echo "<a href=\"" . $sshotSRCDisplay['src'] . " \" target=\"_blank\" >";
    echo "<img class=\"d-block img-fluid\" src=\" " . $sshotSRCDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
    echo "</a> <br />";

  }

  // If after the query there is a value in the HREF field 
  elseif ($shotSectionDisplay = "distro")
  {
    echo "<a href=\" " . $sshotSectionHREFDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
  }

}

// function that checks if there is content in the src (image) field in the database 
function srcCheck 
{

  // HOW to determine what query to run? 

  // If the SRC field is set, display src data (actual screenshots)




}

// function to check if the href field isset based on the query 
function hrefCheck
{
  // How to determine query? 

  // If the HREF field has data in it (links to screenshots) display those links 



}





/////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////


// Function name seems too generic atm 
function screenshotcheck($sshotSectionDisplay, $srcDETest, $srcDEQuery)
{

  // allows the use of the variable - This tells the function what section the request came from ... Distro or Desktop 

  // This is being passed from the SS (any of them) so called DB file ... they may all become one file later on  
  global $sshotSectionDisplay; 

  // what is section is being used - told by the variable above - will determine what query to use 






   if ($shotSectionDisplay = "DE")
    {

     


    }
    elseif ($shotSectionDisplay = "distro")
    {      

    }
    // More to come later 



    screenshotsDisplay($sshotTEST); 

}
?>