

<?php

    while($field=mysqli_fetch_array($sshotDEResult))
      {

        $img = $field[0];

        echo "<a href=\" {$img} \" target=\"_blank\" >";
          echo "<img src=\"{$img} \" alt=\" whatever alt tag here \" /> ";
        echo "</a> <br />";

        echo "<a href=\"{$img}\" > LINK TO PAGE WITH SCREENSHOTS </a>";

      }

  ?>
