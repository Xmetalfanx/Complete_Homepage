<?php 
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . '/modules/linux/linuxBaseHeader.tpl'; 

  echo '<body onload="getDesktopData()">';
  
  include $sitePath . '/modules/linux/linuxNavMenu.tpl';
  
  echo '<div class="row mt-3">';
  echo '<div class="col-xm-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">';
  
  include $sitePath . '/linuxHQ/modules/sections/linuxDECol1.tpl';
  
  echo '</div>';
  echo '<div class="col-xm-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">';
  echo '<div id="desktopSection">';

  echo '</div>';
  echo '</div>';
  echo '</div <!-- Ends Row -->';

  echo '<script src="http://xmetal.x10.mx/linuxHQ/scripts/desktops.js"></script>';

  include $sitePath . "/modules/footer.tpl";

?>

