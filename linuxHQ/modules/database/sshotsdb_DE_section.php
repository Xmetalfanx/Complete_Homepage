<?php

	// NOT SURE if these are needed anymore 
    $DETest = "SELECT src,href FROM sshots WHERE ssde = '$localdename' ";
    $DEQuery = mysqli_query($conn, $srcDETest);


    // Seems I do need what is above this, though I have an idea that may eliminate that need later on 





    // Do I need to pass the $localDE variable type variable specifically? 
    screenshotcheck();

?>