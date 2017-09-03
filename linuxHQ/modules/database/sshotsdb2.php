  <?php

  foreach($sshottestresult as $field)
  {
    echo "<a href=\"" . $field['src'] . " \" target=\"_blank\" >";
    echo "<img class=\"img-fluid\" src=\" " . $field['src'] . " \" alt=\" whatever alt tag here \" /> ";
    echo "</a> <br />";
  }

  ?>
