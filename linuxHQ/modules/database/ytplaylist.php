<?php

    foreach($ytResult as $field)
    {
      echo "<div class=\"row\" >";
        echo "<div class=\"col-lg-6\" >";
          echo "<a href=\" " . ($field['ytreviewplaylist']) . " \" target=\"_blank\"> Youtube Review and Comment Playlist </a>";
        echo "</div>";

        echo "<div class=\"col-lg-6\" >";
          echo "<a href=\" " . ($field['yttweaksplaylist']) .  " \" target=\"_blank\"> Youtube Tweaks and Tips Playlist </a>" ;
        echo "</div>";
      echo "</div>";

    }
?>
