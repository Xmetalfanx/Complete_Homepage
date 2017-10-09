<?php

  echo "<p>Current Released Version: <strong>" . $mainInfoDisplay['currentversion'] . " </strong></p>"; 

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

      echo "<td>" . $fedoraDisplay['f25version'] . "</td>";
      echo "<td>" . $fedoraDisplay['f26version'] . "</td>";

      echo "<td>" . $suseDisplay['leap422version'] . "</td>";
      echo "<td>" . $suseDisplay['leap423version'] . "</td>";

      echo "<td>" . $ubuntuDisplay['lts16040ver'] . "</td>";
      echo "<td>" . $ubuntuDisplay['lts16043ver'] . "</td>";
      echo "<td>" . $ubuntuDisplay['1704ver'] . "</td>";

    echo "</tr>";

  echo "</table>";

?>
