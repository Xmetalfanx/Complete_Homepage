<?php
  require('connect.php');

  // Creates Query
  $query = "SELECT * FROM commonData";

  // Get Results
  $result = mysqli_query($conn, $query) or ('Error querying database');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test </title>

    <!-- Predone Boostrap for styling -->
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

  </head>
  <body>
    <div class="container">

        <?php
            foreach($result as $field)
            {
              echo "<div class=\"well\">";

                echo "<img src=\"" . ($field['iconURL']) . " \" alt=\"" . ($field['distroTitle']) . " Icon\" /> <br />"   ;

                echo "<strong>Distro Name: </strong> ";
                echo ($field['distroTitle'] . " <br /> ");

                echo "<em>Homepage:</em> <a href=\" " . ($field['homepage']) . "\" target=\"_blank\" >" . ($field['distroTitle']) . " Homepage </a> <br />";

                echo "<em> Download: </em> <a href=\"" . ($field['download']) . "\" target=\"_blank\"> " . ($field['distroTitle']) . " Downloads </a><br />";

                echo "<em> Forums </em> <a href=\"" . ($field['forum']) . "\" target=\"_blank\"> " . ($field['distroTitle']) . "'s Forums </a> <br />";

                echo "Version: " . ($field['version'])  . "<br />";

                echo "<em>Distrowatch: <a href=\"" . ($field['distrowatch']) . "\" target=\"_blank\"> " . ($field['distroTitle']) . " on Distrowatch </a><br />";

                echo "Desktops: " . ($field['desktops']) . "<br />";

                echo "Distros that are similar: " . ($field['similar']) . "<br />";

                echo "<br /> Target Users: " . ($field['target']) . "<br />";

                echo "Software Type: " . ($field['software']) . "<br />";
                
                echo "</div>";

            }
        ?>


  </div>

  </body>
</html>
