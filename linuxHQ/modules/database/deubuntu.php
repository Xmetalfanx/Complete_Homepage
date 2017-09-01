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

    }

?>
