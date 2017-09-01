<?php

echo "<p>Current Released Version </p>:";

  echo "<table>";
    echo "<caption>Desktop version comparision chart</caption>";
    echo "<tr>";
      echo "<th>Arch</th>";

      echo "<th>Fedora 25 ISO</th>";
      echo "<th>Fedora 26 ISO</th>";

      echo "<th>OpenSuse Leap 42.2</th>";
      echo "<th>OpenSuse Leap 42.3</th>";

      echo "<th>Ubuntu 16.04 LTS Intial ISO</th>";
      echo "<th>Ubuntu 16.04.3 LTS ISO Refresh </th> ";
      echo "<th>Ubuntu 17.04 bases</th>";

    echo "</tr>";

    echo "<tr>";

      echo "<td>" . $archVerDisplay["pacmanversion"] . "</td>";


      foreach($fedoraresult as $field)
      {
        echo "<td>" . $field['f25version'] . "</td>";
        echo "<td>" . $field['f26version'] . "</td>";
      }

      foreach($suseresult as $field)
      {

        echo "<td>" . $field['leap422version'] . "</td>";
        echo "<td>" . $field['leap423version'] . "</td>";
      }

      foreach($ubunturesult as $field)
      {
      echo "<td>" . $field['lts16040ver'] . "</td>";
      echo "<td>" . $field['lts16043ver'] . "</td>";
      echo "<td>" . $field['1704ver'] . "</td>";
      }

    echo "</tr>";

  echo "</table>";

?>
