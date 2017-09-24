<?php

  $platformcheckquery = "SELECT *
                          CASE
                            WHEN platform = 'CP' THEN 'cp'
                            WHEN platform = 'W' THEN 'W'
                            WHEN platform = 'L' THEN 'L'
                          END progplatform
                          FROM
                            `overallsoftware`
                          ORDER BY appname";


    #echo $platformcheckquery;


    if ($progplatform = "CP")
    {
      echo "CROSS PLATFORM";
    }
    elseif ($progplatform = "L")
    {
      echo "Linux only";
    }
    elseif ($progplatform = "W")
    {
      echo "Windows only";
    }
?>
