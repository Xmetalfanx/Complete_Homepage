  <?php

  foreach($sshottestresult as $field)
  {


    echo "<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">";
      echo "<div class=\"carousel-inner\" role=\"listbox\">";

        echo "<div class=\"carousel-item active\">";
        echo "<a href=\"" . $sshotDisplay['src'] . " \" target=\"_blank\" >";
        echo "<img class=\"d-block img-fluid\" src=\" " . $sshotDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
        echo "</a> <br />";
        echo "</div>";

        echo "<div class=\"carousel-item\">";
        echo "<a href=\"" . $sshotDisplay['src'] . " \" target=\"_blank\" >";
        echo "<img class=\"d-block img-fluid\" src=\" " . $sshotDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
        echo "</a> <br />";
        echo " </div>";

        echo "<div class=\"carousel-item\">";
        echo "<a href=\"" . $sshotDisplay['src'] . " \" target=\"_blank\" >";
        echo "<img class=\"d-block img-fluid\" src=\" " . $sshotDisplay['src'] . " \" alt=\" whatever alt tag here \" /> ";
        echo "</a> <br />";
        echo "</div>";




      echo "</div>";

      echo "<a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">";
        echo "<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>";
        echo "<span class=\"sr-only\">Previous</span>";
      echo "</a>";

      echo "<a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">";
        echo "<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>";
        echo "<span class=\"sr-only\">Next</span>";
      echo "</a>";
    echo "</div>";


      echo "<a href=\" " . $sshotDisplay['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";


  }

  ?>
