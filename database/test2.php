<?php
  require('connect.php');

  $localName='mint';

  // Creates Query
  $query = "SELECT * FROM linuxtest WHERE distroName = '$localName' ";

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
      <p>
        The result that should be displayed is <strong> <?php echo $localName; ?> </strong> related.
      </p>

        <?php
            foreach($result as $row)
            {
              foreach($row as $field)
              {
              }
            }
        ?>


      <hr />
      <p>Could this be the fix below</p>

      <div class="well">
        <?php
            foreach($result as $field)
            {
                echo "<strong>Distro Name: </strong> ";
                echo ($row['distroTitle'] . " <br /> ");
                echo "<em>Homepage:</em> <a href=\" " . ($row['homepage'] . "\" target=\"_blank\" >" . ($row['distroTitle']) . " Homepage </a> <br />" );

            }
        ?>
      </div>

  </div>

  </body>
</html>
