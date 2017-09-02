<?php

  foreach($suseresult as $field)
  {

    echo "Version Comparision Chart";

    echo "<table>";
    echo "<tr>";
        echo "<th>Leap 42.2 </th>";
        echo "<th>Leap 42.3 </th>";
        echo "<th>Tumbleweed </th>";
      echo "</tr>";
      echo "<tr>";
        echo "<td>" . ($field['leap422version']) . "</td>";
        echo "<td>" . ($field['leap423version']) . "</td>";
        echo "<td>" . ($field['twversion'])  . "</td>";
    echo "</tr>";
    echo "</table>";

    echo "<strong> How to install: </strong>" . $field['install'];

  }



?>
