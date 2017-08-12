<?php
  require('connect.php');

  // Creates Query
  $query = "SELECT * FROM sstest";

  // Get Results
  $result = mysqli_query($conn, $query) or ('Error querying database');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Screenshot Test </title>

    <!-- Predone Boostrap for styling -->
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

    <link href="/linuxHQ/stylesheets/styling.css" rel="stylesheet" type="text/css">


  </head>
  <body>
    <div class="container hidden-md-down">

        <?php
            foreach($result as $field)
            {

                echo "<div id=\"screenshots\"> ";

                  echo "<img src=\"" . ($field['src']) . "\" alt=\" whatever alt tag here \" /> ";



                  echo "<a href=\"" . ($field['href']) . "\" > LINK TO PAGE WITH SCREENSHOTS HERE </a>";


              echo "</div>";


            }
        ?>


  </div>

  </body>
</html>
