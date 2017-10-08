<?php

 
      echo "<div class=\"well\">";
        echo "<div class=\"card\">";
        echo "<div  class=\"card-text\">";

          echo "<div class=\"row\"> ";
            echo "<div class=\"icons\"> ";
              echo "<img src=\" " . $commondataDisplay['iconURL'] . " \" alt=\"" . $commondataDisplay['distroTitle'] . " Icon\" />";
            echo "</div>"; // Ends Icon class

              echo "<h2> " . $commondataDisplay['distroTitle'] . "</h2>";
            echo "</div> <br />";   // Ends Row Class

          echo "<strong>Homepage: </strong> <a href=\" " . $commondataDisplay['homepage'] . "\" target=\"_blank\" >" . $commondataDisplay['distroTitle'] . " Homepage </a> <br />";

          echo "<strong> Download: </strong> <a href=\"" . $commondataDisplay['download'] . "\" target=\"_blank\" > " . $commondataDisplay['distroTitle'] . " Downloads </a><br />";

          echo "<strong> Forums </strong> <a href=\"" . $commondataDisplay['forum'] . "\" target=\"_blank\"> " . $commondataDisplay['distroTitle'] . "'s Forums </a> <br />";

          echo "<strong> Version: </strong>" . $commondataDisplay['version']  . "<br />";

          echo "<strong>Distrowatch:</strong> <a href=\"" . $commondataDisplay['distrowatch'] . "\" target=\"_blank\"> " . $commondataDisplay['distroTitle'] . " on Distrowatch </a><br />";

          echo "<strong>Desktops: </strong>" . $commondataDisplay['desktops'] . "<br />";

          echo "<strong>Distros that are similar: </strong>" . $commondataDisplay['similar'] . "<br /><br />";

          echo "<strong>Target Users:</strong> " . $commondataDisplay['target'] . "<br />";

          echo "<strong>Software Type: </strong> " . $commondataDisplay['software'] . "<br />";

          // echo "</div><br />";
          echo "<strong>Youtube Playlists</strong>";

            include $sitePath . '/linuxHQ/modules/database/ytplaylist.php';

          echo "<br /> <hr />";

        echo "</div>"; // Ends Card Text

      echo "</div>"; // Ends Card

      echo "</div>"; // Ends Well Class

?>
