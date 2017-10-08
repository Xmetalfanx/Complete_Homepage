  <?php

  

    // IF THERE ARE RESULTS 
    if (mysqli_num_rows($sshotDEResult) > 0) {
        while($row = mysqli_fetch_assoc($sshotDEResult))
        {

          echo "<a href=\"" . $row['src'] . " \" target=\"_blank\" >";
          echo "<img class=\"d-block img-fluid\" src=\" " . $row['src'] . " \" alt=\" whatever alt tag here \" /> ";
          echo "</a> <br />";
     
          echo "<a href=\" " . $row['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";

        }
    }
?>