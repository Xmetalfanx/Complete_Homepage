<?php 

  require $sitePath . '/linuxHQ/modules/screenshotfunctions.php'; 


  // Function name seems too generic atm 
  function screenshotcheck()
  {

    // not sure if needed but this allows the use of the local variables from each linux section set IN EACH FILE 
    global $localDEname;

    // start SRC check function 
      // ?? Function contains pass to display function? ... I think it should 
    srcCheck();

    // Start pass to HREF function 
    hrefCheck();

  }

?>