<?php

  foreach($fedoraresult as $field)
  {

    echo "Version Comparision Chart";

      echo "<table>";
      echo "<tr>";
        echo "<th> Fedora 25 </th>";
        echo "<th> Fedora 26</th>";
        echo "<th>Rawhide </th>";
      echo "</tr>";
      echo "<tr>";
        echo "<td>" . ($field['f25version']) . "</td>";
        echo "<td>" . ($field['f26version']) . "</td>";
        echo "<td>" . ($field['rawhideversion']) . "</td>";
      echo "</tr>";
      echo "</table>";

      echo "<strong>How to Install: </strong>" . $field['install'];

  }

?>
