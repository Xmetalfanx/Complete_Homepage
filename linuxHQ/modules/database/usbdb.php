<?php

    // For getting USB Creation info about a distro 
    $usb = "SELECT * FROM usb WHERE distroName = '$localdistroName' ";
    $usbResults = mysqli_query($conn, $usb) or ('Error querying database');

   // IF THERE ARE RESULTS 
    if ($row = mysqli_num_rows($usbResults) > 0) 
    {
        while($row = mysqli_fetch_assoc($usbResults))
        {

          echo "<div id=\"usb\" >";
            echo "<br /> <ul> Cross Platform: ";
            echo "<li> Etcher.io "  . $row['etcher'] .  " </li>";
            echo "<li> UNetBootin " . $row['unetbootin'] ." </li>";
          echo "</ul>";

          echo "<br /><ul> Windows Related: ";
            echo "<li> Rufus: " . $row['rufus'] . " </li>";
            echo "<li> ImageUSB: " . $row['imageusb'] . " </li>";
            echo "<li> YUMI: " . $row['yumi'] . " </li>";
          echo "</ul>";


          echo "<br /><ul> Linux Related";
            echo "<li> dd command " . $row['ddcommand'] . " </li>";
            echo "<li> Linux Mint Image Creator: " . $row['mintusb'] . " </li>";
            echo "<li> OpenSuse Image Writer " . $row['opensuseimage'] . " </li>";
          echo "</ul>";
        echo "</div>";

      }
    }
?>
