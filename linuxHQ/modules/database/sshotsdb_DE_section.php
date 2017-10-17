<?php
  
    if ($row = mysqli_num_rows($sshotDESrcResult) > 0) 
    {
      while($row = mysqli_fetch_assoc($sshotDESrcResult))
      {

      echo "<a href=\"" . $row['src'] . " \" target=\"_blank\" >";
      echo "<img class=\"d-block img-fluid\" src=\" " . $row['src'] . " \" alt=\" whatever alt tag here \" /> ";
      echo "</a> <br />";
      }
    }

   // IF THERE ARE RESULTS 
    if ($row = mysqli_num_rows($sshotDEHrefResult) > 0) 
    {
      while($row = mysqli_fetch_assoc($sshotDEHrefResult))
      {
        echo "<a href=\" " . $row['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
      }
    }
?>