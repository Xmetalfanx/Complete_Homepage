<?php
{

  echo "<div class=\"row\"> ";
    echo "<div class=\"col-lg-6\" > ";
      echo "<strong>Would I recommend this distrobution to anyone curious about it?: </strong> " . $recexpDisplay['anyuserRec'];
    echo "</div>";

    echo "<div class=\"col-lg-6\" > ";
      echo "<strong>Any reason given: </strong> " . $recexpDisplay['anyuserReason'];
    echo "</div> ";
  echo "</div>";


  echo "<div class=\"row\"> ";
    echo "<div class=\"col-lg-6\"> ";
      echo "<strong> Would I recommend this distrobution to a new user to Linux?: </strong>" . ($recexpDisplay['newuserRec']);
    echo "</div>";
    echo "<div class=\" col-lg-6\"> ";
      echo "Reason: " . $recexpDisplay['newuserReason'];
  echo "</div> ";

      echo "</div> <br /> <br />";

      echo "<div class=\"row\"> ";

        echo "<strong>My Experience: </strong> " . $recexpDisplay['myexp'] . " <br />";
        echo "<strong>Any Extra Comments: </strong> " . $recexpDisplay['comments'];

      echo "</div>";
}
?>