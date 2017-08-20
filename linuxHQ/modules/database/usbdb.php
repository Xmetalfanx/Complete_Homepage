
<?php
    foreach($usbResults as $field)
    {
      echo "<div id=\"usb\" >";
          echo "<ul> Cross Platform: ";
            echo "<li> Etcher.io "  . ($field['etcher']) .  " </li>";
            echo "<li> UNetBootin " . ($field['unetbootin']) ." </li>";
          echo "</ul>";

          echo "<ul> Windows Related: ";
            echo "<li> Rufus: " . ($field['rufus']) . " </li>";
            echo "<li> ImageUSB: " . ($field['imageusb']) . " </li>";
            echo "<li> YUMI: " . ($field['yumi']) . " </li>";
          echo "</ul>";


          echo "<ul> Linux Related";
            echo "<li> dd command " . ($field['ddcommand']) . " </li>";
            echo "<li> Linux Mint Image Creator: " . ($field['mintusb']) . " </li>";
            echo "<li> OpenSuse Image Writer " . ($field['opensuseimage']) . " </li>";
          echo "</ul>";
      echo "</div>";

    }
?>
