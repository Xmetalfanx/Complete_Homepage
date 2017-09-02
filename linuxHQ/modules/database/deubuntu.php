<?php

  foreach($ubunturesult as $field)
{
      echo "<table>";
      echo "<tr>";
        echo "<th>16.04.0 LTS ISO</th>";
        echo "<th>16.04.3 LTS ISO </th>";
        echo "<th>17.04 ISO </th>";
        echo "<th>17.10 Alpha ISO</th>";
      echo "</tr>";
      echo "<tr>";
        echo "<td>" . $field['lts16040ver'] . "</td>";
        echo "<td>" . $field['lts16043ver'] . "</td>";
        echo "<td>" . $field['1704ver'] . "</td>";
        echo "<td>" . $field['1710ver'] . "</td>";

      echo "</tr>";
      echo "</table>";

      echo "<em>put code here to check if its plasma 5 and if its not a plasma5 page, do not show this.... this will eventually be in the table above</em><br /><br /> ";

      echo "KDE Neon version:" . $field['neonversion'] . "<br />";

      echo "<strong>How to Install: </strong>" . $field['install'] . "<br />";

      echo "<strong>How to install specifically in Linux Mint: </strong>" . $field['mintinstall'] . "<br />";



    }

?>
