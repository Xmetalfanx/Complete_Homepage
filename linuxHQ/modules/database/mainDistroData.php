<?php

 
      echo "<div class=\"well\">";
        echo "<div class=\"card\">";
        echo "<div  class=\"card-text\">";

          echo "<div class=\"row\"> ";
            echo "<div class=\"icons\"> ";
              echo "<img src=\" " . $commonDataDisplay['iconURL'] . " \" alt=\"" . $commonDataDisplay['distroTitle'] . " Icon\" />";
            echo "</div>"; // Ends Icon class

              echo "<h2> " . $commonDataDisplay['distroTitle'] . "</h2>";
            echo "</div> <br />";   // Ends Row Class

          echo "<strong>Homepage: </strong> <a href=\" " . $commonDataDisplay['homepage'] . "\" target=\"_blank\" >" . $commonDataDisplay['distroTitle'] . " Homepage </a> <br />";

          echo "<strong> Download: </strong> <a href=\"" . $commonDataDisplay['download'] . "\" target=\"_blank\" > " . $commonDataDisplay['distroTitle'] . " Downloads </a><br />";

          echo "<strong> Forums </strong> <a href=\"" . $commonDataDisplay['forum'] . "\" target=\"_blank\"> " . $commonDataDisplay['distroTitle'] . "'s Forums </a> <br />";

          echo "<strong> Version: </strong>" . $commonDataDisplay['version']  . "<br />";

          echo "<strong>Distrowatch:</strong> <a href=\"" . $commonDataDisplay['distrowatch'] . "\" target=\"_blank\"> " . $commonDataDisplay['distroTitle'] . " on Distrowatch </a><br />";

          echo "<strong>Desktops: </strong>" . $commonDataDisplay['desktops'] . "<br />";

          echo "<strong>Distros that are similar: </strong>" . $commonDataDisplay['similar'] . "<br /><br />";

          echo "<strong>Target Users:</strong> " . $commonDataDisplay['target'] . "<br />";

          echo "<strong>Software Type: </strong> " . $commonDataDisplay['software'] . "<br />";

          // echo "</div><br />";
          echo "<strong>Youtube Playlists</strong>";

            include $sitePath . '/linuxHQ/modules/database/ytplaylist.php';

          echo "<br /> <hr />";

        echo "</div>"; // Ends Card Text

      echo "</div>"; // Ends Card

      echo "</div>"; // Ends Well Class

?>
