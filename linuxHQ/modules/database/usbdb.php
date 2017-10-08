<?php

    echo "<div id=\"usb\" >";
      echo "<br /> <ul> Cross Platform: ";
      echo "<li> Etcher.io "  . $usbDisplay['etcher'] .  " </li>";
      echo "<li> UNetBootin " . $usbDisplay['unetbootin'] ." </li>";
    echo "</ul>";

    echo "<br /><ul> Windows Related: ";
      echo "<li> Rufus: " . $usbDisplay['rufus'] . " </li>";
      echo "<li> ImageUSB: " . $usbDisplay['imageusb'] . " </li>";
      echo "<li> YUMI: " . $usbDisplay['yumi'] . " </li>";
    echo "</ul>";


    echo "<br /><ul> Linux Related";
      echo "<li> dd command " . $usbDisplay['ddcommand'] . " </li>";
      echo "<li> Linux Mint Image Creator: " . $usbDisplay['mintusb'] . " </li>";
      echo "<li> OpenSuse Image Writer " . $usbDisplay['opensuseimage'] . " </li>";
    echo "</ul>";
  echo "</div>";

?>
