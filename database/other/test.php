<?php
  require('connect.php');

  // Creates Query
  $query = "SELECT * FROM linuxtest";

  // Get Results
  $result = mysqli_query($conn, $query) or ('Error querying database');


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Database Test </title>

    <!-- Predone Boostrap for styling -->
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
      <div>Distro Name:
          <?php

              foreach($result as $row)
              {
                echo "<div><strong>Distro Name: </strong> ";
                echo ($row['distroTitle'] . " <br />");

                echo "<em>Homepage: </em>";
                echo ($row['homepage'] . " </div> <br />" );

                // foreach($row as $field)
                //  echo ( $row['distroTitle'] . "  " . "<br />");
              }
          ?>

    <hr />
  </div>

  </body>
</html>
