<?php

    foreach($conmondataResults as $field)
    {
      echo "<div class=\"well\">";

        echo "<div class=\"card\">";

        echo "<div  class=\"card-text\">";

          echo "<div class=\"row\"> ";
            echo "<div class=\"icons\"> ";
              echo "<img src=\" " . ($field['iconURL']) . " \" alt=\"" . ($field['distroTitle']) . " Icon\" />";
            echo "</div>"; // Ends Icon class

              echo "<h2> " . ($field['distroTitle']) . "</h2>";
            echo "</div> <br />";   // Ends Row Class

          echo "<strong>Homepage: </strong> <a href=\" " . ($field['homepage']) . "\" target=\"_blank\" >" . ($field['distroTitle']) . " Homepage </a> <br />";

          echo "<strong> Download: </strong> <a href=\"" . ($field['download']) . "\" target=\"_blank\" > " . ($field['distroTitle']) . " Downloads </a><br />";

          echo "<strong> Forums </strong> <a href=\"" . ($field['forum']) . "\" target=\"_blank\"> " . ($field['distroTitle']) . "'s Forums </a> <br />";

          echo "<strong> Version: </strong>" . ($field['version'])  . "<br />";

          echo "<strong>Distrowatch:</strong> <a href=\"" . ($field['distrowatch']) . "\" target=\"_blank\"> " . ($field['distroTitle']) . " on Distrowatch </a><br />";

          echo "<strong>Desktops: </strong>" . ($field['desktops']) . "<br />";

          echo "<strong>Distros that are similar: </strong>" . ($field['similar']) . "<br /><br />";

          echo "<strong>Target Users:</strong> " . ($field['target']) . "<br />";

          echo "<strong>Software Type: </strong> " . ($field['software']) . "<br />";

          // echo "</div><br />";
          echo "<strong>Youtube Playlists</strong>";

            include $sitePath . '/linuxHQ/modules/database/ytplaylist.php';

          echo "<br /> <hr />";

        echo "</div>"; // Ends Card Text

      echo "</div>"; // Ends Card

      echo "</div>"; // Ends Well Class

}
?>
