<?php
      
  

    // IF THERE ARE RESULTS 
    if (mysqli_num_rows($reqResult) > 0) 
    {
        while($row = mysqli_fetch_assoc($reqResult))
        {
  
        echo "Required Processor: " . ($field['reqprocessor']) . "<br />";

        echo "Required Hard Drive Space:" . ($field['reqhddspace']) . "<br />";

        echo "Required Memory: " . ($field['reqmemory']) . "<br />";

      }
    }

?>
