  <?php

    // For Screenshots in the desktop section 
    $sshotDistro = "SELECT ssde,src FROM sshots WHERE distroName = '$localdistroname' ";
    $sshotDistroResult = mysqli_query($conn, $sshotDistro) or ('Error querying database');
    $sshotDistroDisplay = mysqli_fetch_assoc($sshotDistroResult);
    // mysqli_free_result($sshotDEResult);


   // IF THERE ARE RESULTS 
    if ($row = mysqli_num_rows($sshotDistroResult) > 0) 
    {
      while($row = mysqli_fetch_assoc($sshotDistroResult))
      {

        echo "<a href=\"" . $row['src'] . " \" target=\"_blank\" >";
        echo "<img class=\"d-block img-fluid\" src=\" " . $row['src'] . " \" alt=\" whatever alt tag here \" /> ";
        echo "</a> <br />";

        echo "<a href=\" " . $row['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";

      }
  }

  ?>
