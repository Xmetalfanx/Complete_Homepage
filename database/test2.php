<?php
  require('connect.php');

  $localName='solus';

  // Creates Query
  $query = "SELECT * FROM linuxtest WHERE distroName = '$localName' ";

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
      <p> The result that should be displayed is Arch related
      </p>
      <br />
      <div class="well">

        <strong>Distro Name: </strong>

        <?php
            foreach($result as $row)
            {
              foreach($row as $field)
              {
                echo "<strong>Distro Name: </strong> ";
                echo ($row['distroTitle'] . " <br /> ");
                echo "<em>Homepage:</em> <a href=\" " .  ($row['homepage'] . "\" target=\"_blank\" > <br />" );

              }
            }
        ?>


        </div>


        <div>
            Test2:

        </div>

    <hr />
  </div>

  </body>
</html>
