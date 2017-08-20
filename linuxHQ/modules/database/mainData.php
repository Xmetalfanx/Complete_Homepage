
<?php
    foreach($conmondataResults as $field)
    {
      echo "<div class=\"well\">";

        echo "<div class=\"card\">";

        echo "<div  class=\"card-text\">";

          echo "<div class=\"row\"> <div class=\"icons\"> <img src=\"" . ($field['iconURL']) . " \" alt=\"" . ($field['distroTitle']) . " Icon\" /> </div><br /> "   ;

          echo "<h2><strong> ";
          echo ($field['distroTitle'] . "</strong></h2> <br /> </div>");

          echo "<em>Homepage:</em> <a href=\" " . ($field['homepage']) . "\" target=\"_blank\" >" . ($field['distroTitle']) . " Homepage </a> <br />";

          echo "<em> Download: </em> <a href=\"" . ($field['download']) . "\" target=\"_blank\"> " . ($field['distroTitle']) . " Downloads </a><br />";

          echo "<em> Forums </em> <a href=\"" . ($field['forum']) . "\" target=\"_blank\"> " . ($field['distroTitle']) . "'s Forums </a> <br />";

          echo "Version: " . ($field['version'])  . "<br />";

          echo "<em>Distrowatch:</em> <a href=\"" . ($field['distrowatch']) . "\" target=\"_blank\"> " . ($field['distroTitle']) . " on Distrowatch </a><br />";

          echo "Desktops: " . ($field['desktops']) . "<br />";

          echo "Distros that are similar: " . ($field['similar']) . "<br />";

          echo "<br /> Target Users: " . ($field['target']) . "<br />";

          echo "Software Type: " . ($field['software']) . "<br />";

          echo "</div><br /><br />";

          include $sitePath . '/linuxHQ/modules/database/ytdbtable.php'; ;

          echo "<br /> <hr />";

        echo "</div>";

      echo "</div>";


    }
?>
