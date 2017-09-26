  <?php

  foreach($sshotDEResult as $field)
  {
    echo "<a href=\"" . $field['src'] . " \" target=\"_blank\" >";
    echo "<img class=\"d-block img-fluid\" src=\" " . $field['src'] . " \" alt=\" whatever alt tag here \" /> ";
    echo "</a> <br />";


      echo "<a href=\" " . $field['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";

  }

  ?>
