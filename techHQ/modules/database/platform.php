<?php

  $platformcheckquery = "SELECT platform
                          CASE
                            WHEN platform = 'CP'
                              THEN SET @platformid = 'Cross Platform'
                            WHEN platform = 'W'
                              THEN SET @platformid = 'Windows'
                            WHEN platform = 'L'
                              THEN SET @platformid = 'Linux'
                          END progplatform
                          FROM
                            `overallsoftware`
                          ORDER BY appname";

  $platformcheckresult = mysqli_query($conn2, $platformcheckquery) or ('Error querying database');

  echo $platformcheckresult;


?>
