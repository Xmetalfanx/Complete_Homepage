  <?php

  foreach($sshotDistroResult as $field)
  {
  	

    // If src is present in the database 
    if (isset($src))
    {
      echo "<a href=\"" . $field['src'] . " \" target=\"_blank\" >";
      echo "<img class=\"d-block img-fluid\" src=\" " . $field['src'] . " \" alt=\" whatever alt tag here \" /> ";
      echo "</a> <br />";

    }


    // If href aka a link to a page with screenshots is present in the database 
    if (isset($href))
    {
      echo "<a href=\" " . $field['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";

    }
  

  }

  ?>
