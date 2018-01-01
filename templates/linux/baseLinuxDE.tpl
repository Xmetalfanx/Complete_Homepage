<?php
    
    $sitePath = "/home/xmetalx1/public_html";

    $sectionTitle='Desktop Envirnoment Section - ';
    
    // Connection to DB 
    require $sitePath . '/database/connect.php'; 

    require $sitePath . '/linuxHQ/modules/totaldbrequests.php';
    require $sitePath . '/linuxHQ/modules/database_requests/derequests.php';

    

    // DO NOT PUT THE SCREENSHOT FILE HERE AS THAT WILL PUT THE CONTENT ABOVE AND OUTSIDE THE BODY TAG 

    // Linux Section Header 
    include $sitePath . '/modules/linux/linuxBaseHeader.tpl';
?>

<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="col-xm-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
    <?php include $sitePath . '/linuxHQ/modules/sections/linuxDECol1.tpl'; ?>
  </div>

  <div class="col-xm-12 col-sm-12 col-md-9 col-lg-10 col-xl-10">
    <?php include $sitePath . '/linuxHQ/modules/sections/linuxDEContent.tpl'; ?>
  </div>

</div>

</body> <!-- Opened in Header IIRC -->
</html>
