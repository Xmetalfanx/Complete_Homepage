<?php
      foreach($reqResult as $field)
      {
        echo "Required Processor: " . ($field['reqprocessor']) . "<br />";

        echo "Required Hard Drive Space:" . ($field['reqhddspace']) . "<br />";

        echo "Required Memory: " . ($field['reqmemory']) . "<br />";

      }

?>
