<?php
  require('connect.php');

  // Creates Query
  $query = "SELECT * FROM linuxtest WHERE distroName = 'arch' ";

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
              echo ($result["distroTitle"] . " <br /> ");

                foreach($result as $row)
                {
                  echo "<em>Homepage: </em>";
                  echo ($row['homepage'] . " <br />" );
                }
                
            }
        ?>


        </div>

    <hr />
  </div>

  </body>
</html>
