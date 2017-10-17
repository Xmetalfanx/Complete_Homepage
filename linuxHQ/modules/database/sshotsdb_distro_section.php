 <?php
   
   if ($row = mysqli_num_rows($sshotDistroSrcResult) > 0) 
    {
      while($row = mysqli_fetch_assoc($sshotDistroSrcResult))
      {

      echo "<a href=\"" . $row['src'] . " \" target=\"_blank\" >";
      echo "<img class=\"d-block img-fluid\" src=\" " . $row['src'] . " \" alt=\" whatever alt tag here \" /> ";
      echo "</a> <br />";
      }
    }

   // IF THERE ARE RESULTS 
    if ($row = mysqli_num_rows($sshotDistroHrefResult) > 0) 
    {
      while($row = mysqli_fetch_assoc($sshotDistroHrefResult))
      {
        echo "<a href=\" " . $row['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";
      }
    }
?>