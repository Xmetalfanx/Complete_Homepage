<?php


  echo "<table>";
    echo "<caption>Desktop version comparision chart</caption>";
    echo "<tr>";
      echo "<th>Arch</th>";
      echo "<th>Fedora 25 ISO</th>";
      echo "<th>Fedora 26 ISO</th>";
      echo "<th>OpenSuse Leap 42.2</th>";
      echo "<th>OpenSuse Leap 42.3</th>";
      echo "<th>Ubuntu 16.04 TS ISO Intial release</th>";
      echo "<th>Ubuntu 17.04 bases</th>";
    echo "</tr>";

    echo "<tr>";
      echo "<td>" . $archVerDisplay["pacmanversion"] . "</td>";

        echo "<td>" . $row['f25version'] . "</td>";
        echo "<td>" . $row['f26version'] . "</td>";

      echo "<td>" . $suserow['leap422version'] . "</td>";
      echo "<td>" . ($field['leap423version']) . "</td>";
      echo "<td>" . ($field['lts16040ver']) . "</td>";
      echo "<td>" . ($field['1704ver']) . "</td>";
    echo "</tr>";

  echo "</table>";

?>
