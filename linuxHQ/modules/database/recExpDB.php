
<?php
    foreach($recexpResults as $field)
    {
      echo "<div class=\"row\"> ";

        echo "<div class=\"col-lg-6\" > ";
          echo "<strong>Would I recommend this distrobution to anyone curious about it?: </strong> " . ($field['anyuserRec']);
        echo "</div>";

        echo "<div class=\"col-lg-6\" > ";
          echo "<strong>Any reason given: </strong> " . ($field['anyuserReason']);
        echo "</div> ";

      echo "</div>";


      echo "<div class=\"row\"> ";

        echo "<div class=\"col-lg-6\"> ";
          echo "<strong> Would I recommend this distrobution to a new user to Linux?: </strong>" . ($field['newuserRec']);
        echo "</div>";
        echo "<div class=\" col-lg-6\"> ";
          echo "Reason: " . ($field['newuserReason']);
        echo "</div> ";

      echo "</div> <br /> <br />";

      echo "<div class=\"row\"> ";

        echo "<strong>My Experience: </strong> " . ($field['myexp']) . " <br />";
        echo "<strong>Any Extra Comments: </strong> " . ($field['comments']);

      echo "</div>";

    }
?>
