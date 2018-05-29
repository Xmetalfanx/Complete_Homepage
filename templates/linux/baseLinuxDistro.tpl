<?php

  $sectionTitle='Distrobution Section - ';

  $sitePath = "/home/xmetalx1/public_html";

  require $sitePath . '/linuxHQ/modules/totaldbrequests.php';
  require $sitePath . '/linuxHQ/modules/database_requests/distrorequests.php';

  include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>

<div id="mainBody" class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <div class="col-xm-12 col-sm-3 col-md-3 col-lg-2 col-xl-2 p-3">
    <?php include $sitePath . '/linuxHQ/modules/sections/linuxDistroCol1.tpl';  ?>
  </div>
  <div class="col-xm-9 col-sm-9 col-md-9 col-lg-10 col-xl-10">
    <?php

        include $sitePath . '/linuxHQ/modules/sections/distroSection/linuxDistroContent.tpl';

    ?>
  </div> <!-- Ends main content on the right, column -->
</div> <!-- Ends Row Class -->


<!-- Site Footer -->
<?php include $sitePath . '/modules/footer.tpl'; ?>

</body>
</html>
